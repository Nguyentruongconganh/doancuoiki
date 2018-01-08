@extends('master')
@section('content')
<div class="content">
    <!--contact-->
        <div class="mail-w3ls">
            <div class="container">
                <h2 class="tittle">Mail Us</h2>
                <div class="mail-grids">
                    <div class="mail-top">
                        <div class="col-md-4 mail-grid">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                            <h5>Address</h5>
                            <p>286/2a Trần Hưng Đạo,Nguyễn Cư Trinh,Quận 1,Hồ Chí Minh</p>
                        </div>
                        <div class="col-md-4 mail-grid">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                            <h5>Phone</h5>
                            <p>Telephone:  +0167 640 1524</p>
                        </div>
                        <div class="col-md-4 mail-grid">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                            <h5>E-mail</h5>
                            <p>E-mail:<a href="mailto:example@mail.com"> nguyentruongconganh1997@mail.com</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="map-w3">
                    <iframe src="https://www.google.com/maps/place/86+Tr%E1%BA%A7n+H%C6%B0ng+%C4%90%E1%BA%A1o,+Ph%E1%BA%A1m+Ng%C5%A9+L%C3%A3o,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7662483,106.6913343,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f167372a5db:0xcedad4a6126f8f6c!8m2!3d10.766243!4d106.693523"  allowfullscreen></iframe>
                    </div>
                    <div class="mail-bottom">
                        <h4>Get In Touch With Us</h4>
                        <form action="#" method="post">
                            <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <textarea  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                            <input type="submit" value="Submit" >
                            <input type="reset" value="Clear" >

                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--contact-->
</div>    
@endsection