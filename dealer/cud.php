<?php

session_start();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>



            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                <div class="card" style="width: 90%; margin-top: 5%; margin-bottom: 5%; margin-left: 5%; border-radius: 1.5rem;">
                  <div class="card-body">
                    
                        <!-- Search By ID -->	

                        <form action="" method="POST">

                        <div class="col-12 froum-group actions small">
                        
                            
                            <input type="text" name="id" style="width: 48%; margin-left: 23%;" class="form-control" placeholder="Enter Customer Invoice ID"/>
                            <br><button style="margin-left: 38%;" type="submit" name="search" class="btn btn-gradient-dark btn-rounded btn-fw">Search</button>
                        </div>
                        <br>

                            <?php

                            if(isset($_POST['search'])){

                                $id = $_POST['id'];

                                $sql = "SELECT * FROM invoice where inv_id='$id'";
                                $run = mysqli_query($conn, $sql);

                                while($row=mysqli_fetch_assoc($run))
                                {  
                                    ?>

                                        <div class="mb-3" id="pd">
                                            <h4>Personal Details</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Invoice ID</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="id" value="<?php echo $row['inv_id'];?>" class="form-control" required/>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Full Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="fname" value="<?php echo $row['fullname'];?>" class="form-control" placeholder="Enter Your Name" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">CNIC</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="cnic" value="<?php echo $row['cnic'];?>" class="form-control" placeholder="Enter Your CNIC" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Company:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="company" value="<?php echo $row['company'];?>" class="form-control" placeholder="Enter Company Name" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Email: </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control" placeholder="Enter Email" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="add" value="<?php echo $row['address'];?>" class="form-control" placeholder="Enter your Address" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Country: </label>
                                                    <div class="col-sm-9">
                                                        <select name="country" id="country" class="form-control" required>
                                                            <option> <?php echo $row['country'];?> </option>
                                                            <option value="select">Select</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Åland Islands">Åland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">City:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="city" value="<?php echo $row['city'];?>" class="form-control" placeholder="Enter City" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Zip Code:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="zip" value="<?php echo $row['zipcode'];?>" class="form-control" placeholder="Enter Your ZIP Code" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mobile No:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="mob" value="<?php echo $row['mobile'];?>" class="form-control" placeholder="Enter Mobile Number" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Landline:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="landline" value="<?php echo $row['landline'];?>" class="form-control" placeholder="Enter Landline" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">DOB:</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="dob" value="<?php echo $row['dob'];?>" class="form-control" placeholder="dd/mm/yyyy" required/>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3" id="pd">
                                                <h4>Car Details</h4>
                                            </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Car Brand:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="brand" value="<?php echo $row['carbrand'];?>" class="form-control" placeholder="Enter Car Brand" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Plate No:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="plate" value="<?php echo $row['plateno'];?>" class="form-control" placeholder="Enter Plat No" required/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Registration Number:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="reg" value="<?php echo $row['registrationno'];?>" class="form-control" placeholder="Enter Registration Number" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Mileage: </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="mile" value="<?php echo $row['mileage'];?>" class="form-control" placeholder="Enter Mileage" required/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Year:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="year" value="<?php echo $row['year'];?>" class="form-control" placeholder="Enter Year" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Model No:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="model" value="<?php echo $row['modelno'];?>" class="form-control" placeholder="Enter Model Number" required/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Color:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="color" value="<?php echo $row['color'];?>" class="form-control" placeholder="Enter Color" required/>
                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="mb-3" id="pd">
                                            <h4>Payment Details</h4>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pay Order Number:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="pay" value="<?php echo $row['payordernumber'];?>" class="form-control" placeholder="Enter Pay Order Number" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Car Price:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="price" value="<?php echo $row['carprice'];?>" class="form-control" placeholder="Enter Car Price" required/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tax:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tax" value="<?php echo $row['tax'];?>" class="form-control" placeholder="Enter Tax" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Total Amount: </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="total" value="<?php echo $row['totalamount'];?>" class="form-control" placeholder="Enter Total Amount" required/>
                                                </div>
                                                </div>
                                            </div>
                                        </div> 

                                          
                                            
                                            <div style="margin-left:32%;">
                                                <button role="button" type="submit" name="update" class="btn btn-gradient-success btn-rounded btn-fw" data-submit>Update</button>
                                                <button role="button" type="submit" name="delete" class="btn btn-gradient-danger btn-rounded btn-fw" data-submit>Delete</button>
                                            </div>
                                            </div>

                                    <?php 
                                }

                            }
                                    ?>

                        <?php

                            if(isset($_POST['update'])){

                                $id=$_POST['id'];

                                $fname = $_POST['fname'];
                                $cnic = $_POST['cnic'];
                                $comp = $_POST['company'];
                                $em = $_POST['email'];
                                $add = $_POST['add'];
                                $country = $_POST['country'];
                                $city = $_POST['city'];
                                $zip = $_POST['zip'];
                                $mob = $_POST['mob'];
                                $landline = $_POST['landline'];
                                $dob = $_POST['dob'];
                                $brand = $_POST['brand'];
                                $plateno = $_POST['plate'];
                                $reg = $_POST['reg'];
                                $mile = $_POST['mile'];
                                $year = $_POST['year'];
                                $model = $_POST['model'];
                                $color = $_POST['color'];
                                $pay = $_POST['pay'];
                                $price = $_POST['price'];
                                $tax = $_POST['tax'];
                                $total = $_POST['total'];

                                $sql= "UPDATE `invoice` SET `fullname`='$fname', `cnic`='$cnic', 
                                `company`='$comp', `email`='$em', `address`='$add', `country`='$country', 
                                `city`='$city', `zipcode`='$zip', `mobile`='$mob', `landline`='$landline', 
                                `DOB`='$dob', `carbrand`='$brand', `plateno`='$plateno', 
                                `registrationno`='$reg', `mileage`='$mile', `year`='$year', `modelno`='$model', 
                                `color`='$color', `payordernumber`='$pay', `carprice`='$price', 
                                `tax`='$tax', `totalamount`='$total' WHERE `invoice`.`inv_id`='$id'";
                                
                                $run = mysqli_query($conn, $sql);
                                /*if(mysqli_query($conn, $sql)){
                                    header("location: ud.php?message=Successfully Updated!");
                                    exit(); 
                                }else{
                                    header("location: ud.php?messageD=Registration+failed");
                                    exit();
                                }*/

                            }
                        ?>

                        <?php

                            if(isset($_POST['delete'])){

                                $id=$_POST['id'];

                                $sql = "DELETE FROM invoice where inv_id='$id'";
                                $run = mysqli_query($conn, $sql);
                            }
                        ?>

                  </div>
                </div>
              </div>

  

<?php

  include('includes/footer.php');

?>