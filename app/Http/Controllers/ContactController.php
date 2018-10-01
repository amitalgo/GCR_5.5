<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Services\ContactService;
use App\Services\OfficeService;
use App\Services\CountryService;
use App\Services\AdService;
use App\Services\TagService;
use App\Services\PageBannerService;
use App\Services\SolutionTypeService;
use App\Services\ProductService;
use App\Services\VerticalService;

class ContactController extends Controller
{
    protected $contactService,$officeService,$countryService,$verticalService;
    protected $adService,$pageBannerService,$solutionTypeService,$productService;
    protected $route,$page_id,$content,$banner,$solutions,$abouts,$video;
    public function __construct(ContactService $contactService,OfficeService $officeService,CountryService $countryService,TagService $tagService,VerticalService $verticalService,PageBannerService $pbs)
    {
        $this->contactService = $contactService;
        $this->officeService = $officeService;
        $this->tagService = $tagService;
        $this->countryService =$countryService;
        $this->verticalService = $verticalService->getIsActive();
        $this->pagebnrsrv = $pbs;
    }
    public function index(){

        $this->route = Route::current();
        $route_name = strpos($this->route->getName(), ".") !== false?substr($this->route->getName(),0 ,strpos($this->route->getName(), ".")):$this->route->getName();

        $this->page_id = $this->pagebnrsrv->getPageId($route_name);

        $this->content = $this->pagebnrsrv->getPageContent($this->page_id);
       $this->banner = $this->pagebnrsrv->getPageBanner($this->page_id);


        $this->page_id = $this->pagebnrsrv->getPageId('about-GCR');
        $this->abouts = $this->pagebnrsrv->getPageContent($this->page_id);


        $offices = $this->officeService->getAllOffices();
        $countries = $this->countryService->getAllActiveCountry();
        $content = $this->content;
        $banner = $this->banner;

        $abouts = $this->abouts;
        return view('front-end.contact',compact('offices','countries','content','banner','abouts'));
    }
    public  function send(Request $request){

        $request->validate([
            "firstName" => "required",
            "lastName" => "required",
            "email" => "required|email",
            // "industry" => "required",
            "country" => "required",
            "company" => "required",
            // "company-size" => "required",
            "number" => "required",
            "address" => "required",
            // "topic" => "required"
        ]);
      //  $request->session()->put('popupKey', '1');
        $result = $this->contactService->contactSaveAndSend($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Send successfully.');
        }else{
            return redirect()->back()->with('error-msg', ' Something went wrong.');
        }

    }

    public function supportIndex(AdService $adService,PageBannerService $pageBannerService,ProductService $productService){
        $this->adService = $adService;
        $this->pageBannerService =  $pageBannerService;
        $this->productService = $productService;

        $this->route = Route::current();
        $route_name = strpos($this->route->getName(), ".") !== false?substr($this->route->getName(),0 ,strpos($this->route->getName(), ".")):$this->route->getName();
        $this->page_id = $this->pageBannerService->getPageId($route_name);
        $this->content = $this->pageBannerService->getPageContent($this->page_id);
        $this->banner = $this->pageBannerService->getPageBanner($this->page_id);


        $this->page_id = $this->pageBannerService->getPageId('about-GCR');
        $this->abouts = $this->pageBannerService->getPageContent($this->page_id);


        $offices = $this->officeService->getAllOffices();
        $countries = $this->countryService->getAllActiveCountry();
        $content = $this->content;
        $banner = $this->banner;

        $abouts = $this->abouts;
        return view('front-end.support',compact('offices','countries','content','banner','abouts'));
    }

    public function supportSend(Request $request){
        $request->validate([
            "customerName" => "required",
            "partnerName" => "required",
            "email" => "required|email",
            "support" => "required",
            "prodDescription" => "required",
            "probDescription" => "required",
            "number" => "required",
        ]);

        $result = $this->contactService->supportSaveAndSend($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Send successfully.');
        }else{
            return redirect()->back()->with('error-msg', ' Something went wrong.');
        }
    }


    public function inquiresend(Request $request){

        $result = $this->contactService->InquireSaveAndSend($request);
        if($result){
            return redirect()->back()->with('success-msg', ' Send successfully.');
        }else{
            return redirect()->back()->with('error-msg', ' Something went wrong.');
        }
    }
}
