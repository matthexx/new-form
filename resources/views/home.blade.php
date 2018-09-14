@include('includes.header')

<div class="jumbotron">
  <h1 class="display-3">The Swap Africa!</h1>
  <p class="lead"> Register!</p>
 
</div>

<div class="container">

<!-- <div class="row">

      <div class="container">
            <div class="clearfix"> <span style="float:right">
                <p>Upload passport</p>
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="readURL(this);" />
                <img id="blah" src="css/" alt="your image" /></p>
                </span> 
      </div>

</div> -->

<div class="col-xl-8 offset-xl-2 py-5">
    <h1>
        Welcome!
    </h1>

  

    <p class="lead">fill all required fieds below.</p>


    <form id="contact-form" method="POST" action="" role="form">

        <div class="fields"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">Firstname *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Lastname *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_tel">Telephone *</label>
                            <input id="form_tel" type="tel" name="telephone" class="form-control" placeholder="Please enter your phone no *" required="required" data-error="Valid mobile number is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                
                

                <div class="col-md-6">
                        <div class="form-group">

                            <label for="form_height">Height *</label>
                            <input id="height" type="number" name="height" min="4" max="10" step="1" value="4" class="form-control" placeholder="Please enter your height *" required="required" data-error="specify your height in feet.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                

                <div class="col-md-6">
                        <div class="form-group">

                            <label for="form_dob">Birthday *</label>
                            <input id="date" type="date" name="dob" class="form-control" placeholder="Please enter your date of birth *" required="required" data-error="date of birth is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">Country *</label>
                                <select id="form_need" name="country" class="form-control" required="required" data-error="Please specify your country.">
                                    <option value=""></option>
                                    <option value="Request quotation">Nigeria</option>
                                    <option value="Request order status">South Africa</option>
                                    <option value="Request order status">Ghana</option>
                                    <option value="Request order status">Togo</option>
                                    <option value="Request order status">Kenya</option>
                                    <option value="Request order status">Zambia</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_need">Gender *</label>
                        <select id="form_need" name="gender" class="form-control" required="required" data-error="Please specify your gender.">
                            <option value=""></option>
                            <option value="Request quotation">Male</option>
                            <option value="Request order status">Female</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <hr>



            <div class="row">

                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Talent/Field *</label>
                            <input id="form_name" type="text" name="talent" class="form-control" placeholder="Talent/Field *" required="required" data-error="Specify your talent/field.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Spoken language *</label>
                                <input id="form_name" type="text" name="language" class="form-control" placeholder="Spoken language *" required="required" data-error="Input your preferd spoken language">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group">
                        
                                    <label for="form_name">Do you have a passport? *</label><br>
                                    <input type="radio" name="Question1" value="male" checked> No<br>
                                    <input type="radio" name="Question1" value="female"> Yes<br>

                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                            
                                        <label for="form_name">Are you prepared to travel? *</label><br>
                                        <input type="radio" name="Question2" value="male" checked> No<br>
                                        <input type="radio" name="Question2" value="female"> Yes<br>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                            
                                        <label for="form_name">Upload image *</label><br>
                                        <input type="file" name="image" accept="image/x-png,image/jpeg" />

                                    </div>
                                </div>

                                


                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Links to Videos/website/instagram handle etc *</label>
                                            <input id="form_name" type="url" name="link" class="form-control" placeholder="upload a resource link *" required="required" data-error="upload a resource please">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                    
                                                <label for="form_name">I have read and agree to <a href=""> terms and conditions </a>*</label><br>
                                                <input type="radio" name="Question3" value="male" checked> No<br>
                                                <input type="radio" name="Question3" value="female"> Yes<br>

                                            </div>
                                        </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Tell us about your field and experience *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="share your experience *" rows="4" required="required" data-error="this field is required."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-warning btn-send" value="Send message">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> These fields are required. The Swap Africa
                        <a href="https://9stream.live" target="_blank">9stream</a>.</p>
                </div>
            </div>
        </div>

    </form>

    </div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

@include('includes.footer')