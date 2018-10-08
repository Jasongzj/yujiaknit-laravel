@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
    <!--栏目图-->
    <div class="container contact-bg">
        <div class="row">
        </div>
    </div>

    <!--内容-->
    <div class="container content">
        <div class="row ">

            @include('layouts._breadcrumb', ['sub_title' => 'CONTACT US'])

            <div class="contact-content">
                <form class="col-md-4 contact-form ">
                    <div class="form-group">
                        <h3>Contact Form</h3>
                    </div>
                    <div class="form-group">
                        <input name="first_name" type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                        <span  style="color:Red;display:none;">* Required</span>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" id="email" class="form-control" placeholder="Email" onblur="validate('email')">
                        <span id="notice_email" style="color:Red;display:none;">* Please enter your E-mail address!</span>
                        <span id="notice_correct_email" style="color:Red;display:none;">* Please enter an avilable E-mail address!</span>
                    </div>
                    <div class="form-group">
                        <input name="cell_number" type="text"  class="form-control" placeholder="Cell Number">
                    </div>
                    <div class="form-group">
                        <select name="province" id="" class="form-control">
                            <option value="">-- Choose Continent--</option>
                            <option value="AFRICA">AFRICA</option>
                            <option value="ASIA">ASIA</option>
                            <option value="EUROPE">EUROPE</option>
                            <option value="NORTH AMERICA">NORTH AMERICA</option>
                            <option value="OCEANIA">OCEANIA</option>
                            <option value="SOUTH AMERICA">SOUTH AMERICA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" cols="20"  class="form-control" placeholder="Message"></textarea>
                        <span style="color:Red;display:none;">* Required</span>
                    </div>
                    <div class="form-group">
                        <input type="button" name="" value="SUBMIT" onclick="" id="submitBtn" class="btn btn-danger col-md-12 col-sm-12 col-xs-12">
                    </div>
                </form>
                <!--google map-->
                <div class="col-md-8 google-map">
                    <div class="contact-info">
                        <div class="form-group">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-sm-9">
                            <ul class="list">
                                <li><p><span class="glyphicon glyphicon-earphone"></span>+86-13544061709</p></li>
                                <li><p><span class="glyphicon glyphicon-envelope"></span>harry@yujiaknit.com</p></li>
                                <li><p><span class="glyphicon glyphicon-map-marker"></span>Room1415,ShenHua Commercial Building,JiaBin Road LuoHu District,Shenzhen,China</p></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img class="wechat" src="{{ asset('images/icons/wx_contact.jpg') }}">
                        </div>

                    </div>
                    <iframe
                            width="100%"
                            height="350px"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB7Lq_SSM1fJr7TLmjmUba-bajmwdJF-C8&q=Shenhua+Commercial+Building&language=en" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection