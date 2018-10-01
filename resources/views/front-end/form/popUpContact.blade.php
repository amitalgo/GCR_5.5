<div class="col-md-12">

    <form action="{{route('contact.submit')}}" method="post" onsubmit="sessionStorage.setItem('popupKey','1')">
        <fieldset class="alertDiv">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3><u>Contact Us</u></h3>
                </div>
            </div>
        </fieldset>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name</label> <span class="red">* <small></small></span>
                    <input class="form-control required" placeholder="First Name" type="text" name="firstName">

                    {{csrf_field()}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label> <span class="red">* <small></small></span>
                    <input class="form-control required"  placeholder="Last Name" type="text" name="lastName">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label><span class="red">* <small></small></span>
                    <input class="form-control required"  placeholder="Email" type="email" name="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Country</label> <span class="red">* <small></small></span>
                    <select class="form-control required"  name="country">
                        <option value="">Choose Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->getName()}}">{{$country->getName()}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Company Name</label><span class="red">* <small></small></span>
                    <input class="form-control required"  placeholder="Company Name" type="text" name="company">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Website</label>
                    <input class="form-control"  placeholder="www.yourwebsite.com" type="text" name="website">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Office Number</label> <span class="red">* <small></small></span>
                    <input class="form-control required"  placeholder="Office Phone Number" type="text" name="number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group-text">

                    <label>Address</label> <span class="red">* <small></small></span>
                    <textarea class="form-control required"  placeholder="Address" name="address"></textarea>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-info popupsubmit" value="Submit"/>
                    <input type="button" class="btn btn-warning closePopUp" value="Close"/>
                </div>
            </div>
        </div>
    </form>
</div>