<?php include 'partials/dashboard_scripts.php';

?>

<div class="container-fluid mb-5">
    <!-- Title -->
    <h1 class="h2">
        Account Settings
    </h1>
    <div>
    </div>
    <div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xxl-3">
            <!-- Card -->
            <div class="card border-0 sticky-md-top top-10px">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <div class="avatar avatar-xxl avatar-circle mb-5">
                            <div wire:id="Ugt8bRLUny68utAlcvlQ">
                                <form wire:submit.prevent="update">
                                    <!-- <label class="d-block cursor-pointer">
                                        <span class="position-absolute bottom-0 end-0 m-0 text-bg-primary w-30px h-30px rounded-circle d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                                <g>
                                                    <path d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z" style="fill: currentColor"></path>
                                                    <path d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z" style="fill: currentColor"></path>
                                                    <path d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z" style="fill: currentColor"></path>
                                                    <path d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z" style="fill: currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="file" wire:model="photo" class="d-none">
                                    </label> -->
                                    <img src="https://png.pngtree.com/png-vector/20220521/ourlarge/pngtree-avatar-profile-icon-png-image_4644647.png" alt="Profile picture" class="avatar-img" width="112" height="112">
                                </form>
                            </div>

                            <!-- Livewire Component wire-end:Ugt8bRLUny68utAlcvlQ -->
                        </div>
                        <h3 class="mb-0"><?= $user['full_name'] ?></h3>
                        <span class="small text-secondary fw-semibold"><?= $user['email'] ?></span>
                    </div>
                    <!-- Divider -->
                    <hr class="mb-0">
                </div>
                <!-- the scrollspy -->
                <ul class="scrollspy mb-5" id="account" data-scrollspy="{&quot;offset&quot;: &quot;30&quot;}">
                    <!-- first section -->
                    <li class="active">
                        <a href="#section1" class="d-flex align-items-center py-3">
                            <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                            </svg>
                            Basic information
                        </a>
                    </li>

                    <li>
                        <a href="#section2" class="d-flex align-items-center py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="14" width="14" class="me-3">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.75 9.75H5.25C4.42157 9.75 3.75 10.4216 3.75 11.25V21.75C3.75 22.5784 4.42157 23.25 5.25 23.25H18.75C19.5784 23.25 20.25 22.5784 20.25 21.75V11.25C20.25 10.4216 19.5784 9.75 18.75 9.75Z"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 9.75V6C6.75 4.60761 7.30312 3.27226 8.28769 2.28769C9.27226 1.30312 10.6076 0.75 12 0.75C13.3924 0.75 14.7277 1.30312 15.7123 2.28769C16.6969 3.27226 17.25 4.60761 17.25 6V9.75"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.41789 15 8.25 14.8321 8.25 14.625C8.25 14.4179 8.41789 14.25 8.625 14.25"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.83211 15 9 14.8321 9 14.625C9 14.4179 8.83211 14.25 8.625 14.25"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.41789 18.75 8.25 18.5821 8.25 18.375C8.25 18.1679 8.41789 18 8.625 18"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.83211 18.75 9 18.5821 9 18.375C9 18.1679 8.83211 18 8.625 18"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 15C11.7929 15 11.625 14.8321 11.625 14.625C11.625 14.4179 11.7929 14.25 12 14.25"></path>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 15C12.2071 15 12.375 14.8321 12.375 14.625C12.375 14.4179 12.2071 14.25 12 14.25"></path>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18"></path>
                                    <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18"></path>
                                </g>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.1679 15 15 14.8321 15 14.625C15 14.4179 15.1679 14.25 15.375 14.25"></path>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.5821 15 15.75 14.8321 15.75 14.625C15.75 14.4179 15.5821 14.25 15.375 14.25"></path>
                                </g>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.1679 18.75 15 18.5821 15 18.375C15 18.1679 15.1679 18 15.375 18"></path>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.5821 18.75 15.75 18.5821 15.75 18.375C15.75 18.1679 15.5821 18 15.375 18"></path>
                                </g>
                            </svg>
                            Password
                        </a>
                    </li>



                    <li>
                        <a href="#section3" class="d-flex align-items-center py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14" class="me-3">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>credit-card-1</title>
                                <rect class="a" x="0.75" y="3.75" width="22.5" height="16.5" rx="1.5" ry="1.5"></rect>
                                <line class="a" x1="0.75" y1="8.25" x2="23.25" y2="8.25"></line>
                                <line class="a" x1="5.25" y1="12.75" x2="13.5" y2="12.75"></line>
                                <line class="a" x1="5.25" y1="15.75" x2="10.5" y2="15.75"></line>
                            </svg>
                            Payment methods
                        </a>
                    </li>

                    <!-- <li>
                        <a href="#section4" class="d-flex align-items-center py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14" class="me-3">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>alert-bell-notification-2</title>
                                <circle class="a" cx="18.875" cy="5.827" r="3"></circle>
                                <path class="a" d="M9.125,21.75a2.087,2.087,0,0,0,4.005,0"></path>
                                <line class="a" x1="11.125" y1="3" x2="11.125" y2="0.75"></line>
                                <path class="a" d="M18.648,11.961c.189,5.756,1.477,6.789,1.477,6.789h-18s1.5-1.916,1.5-8.25a7.507,7.507,0,0,1,9.724-7.165"></path>
                            </svg>
                            Notifications
                        </a>
                    </li> -->
                </ul>
                <!-- end of scrollspy -->



            </div>
        </div>

        <div class="col">
            <!-- Card -->

            <!-- <div class="row">
                <div class="col-12">
                    <div class="py-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Please fill atleast one of the payment option to proceed to the withdrawal screen
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div> -->

            <!--  -->

            <div class="card border-0 scroll-mt-3 " id="section1">
                <div class="card-header">
                    <h2 class="h3 mb-0">Basic information</h2>
                </div>

                <div wire:id="4YkoSWtoUAGdS2MpJZr8">
                    <form action="includes/editsub.php" method="post" enctype="application/x-www-form-urlencoded">
                        <div class="card-body">
                            <input type="hidden" name="submit">
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="fullName" class="col-form-label">Full Name</label>
                                </div>

                                <div class="col-lg">
                                    <input type="text" class="form-control" id="fullName" name="fullname" required="" value="<?= $user['full_name'] ?>">
                                    <div class="invalid-feedback">Please add your full name</div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="phone" class="col-form-label">Phone</label>
                                </div>

                                <div class="col-lg">
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>">
                                </div>
                            </div> <!-- / .row -->

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="emailAddress" class="col-form-label">Email address</label>
                                </div>

                                <div class="col-lg">
                                    <input type="email" class="form-control" id="emailAddress" required="" name="email" value="<?= $user['email'] ?>">
                                    <div class="invalid-feedback">Please add your email address</div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="country" class="col-form-label">Country</label>
                                </div>

                                <div class="col-lg">
                                    <div class="mb-4">
                                        <select class="form-select" required="" name="country">
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <script>
                                            const defaultCountry = '<?= $user['country'] ?>'; // Embed the value into JavaScript

                                            // Find the select element by its class or ID
                                            const selectElement = document.querySelector(".form-select");

                                            // Loop through the options and set the selected attribute for the default option
                                            selectElement.querySelectorAll("option").forEach((option) => {
                                                if (option.value === defaultCountry) {
                                                    option.selected = true;
                                                }
                                            });
                                        </script>
                                        <div class="invalid-feedback">Please select a country</div>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Username</label>
                                </div>
                                <div class="col-lg">
                                    <input type="text" class="form-control" name="username" readonly="" value="<?= $user['user_name'] ?>">
                                </div>
                            </div> <!-- / .row -->
                            <div class="row mb-4">

                                <?php if (isset($_GET['s']) && $_GET['s'] == '1') include 'partials/message.php' ?>
                            </div> <!-- / .row -->
                            <div class="d-flex justify-content-end mt-5">
                                <button type="submit" class="btn btn-primary">
                                    <div class="spinner-border spinner-border-sm" role="status" wire:loading="">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Livewire Component wire-end:4YkoSWtoUAGdS2MpJZr8 -->
            </div>

            <!-- Card -->
            <div class="card border-0 scroll-mt-3 " id="section2">
                <div class="card-header">
                    <h2 class="h3 mb-0">Password</h2>
                </div>

                <div wire:id="WK0ITnSivwHbqZDAgKPx">
                    <form action="includes/passwordsub.php" method="post" enctype="application/x-www-form-urlencoded">
                        <input type="hidden" name="submit">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="currentPassword" class="col-form-label">Current password</label>
                                </div>

                                <div class="col-lg">
                                    <input type="password" class="form-control" id="currentPassword" name="password" required="">
                                </div>
                            </div> <!-- / .row -->

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="newPassword" class="col-form-label">New password</label>
                                </div>

                                <div class="col-lg">
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" id="newPassword" autocomplete="off" data-toggle-password-input="" placeholder="Your new password" name="newPassword" required="">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password=""></button>
                                    </div>
                                </div>

                                <div class="col-lg">
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" id="newPasswordAgain" autocomplete="off" data-toggle-password-input="" placeholder="Confirm your new password" name="newPasswordAgain" required="">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password=""></button>
                                    </div>

                                    <div class="invalid-feedback">Please confirm your new password again</div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="row">
                                <div class="col-lg offset-lg-3">
                                    <div class="alert alert-light mw-450px" role="alert">
                                        <h4 class="mb-3">Password requirements:</h4>
                                        <ul class="p-3 mb-0">
                                            <li>Minimum 6 characters long - the more, the better</li>
                                            <li>At least one lowercase character</li>
                                            <li>At least one uppercase character</li>
                                            <li>At least one number, symbol.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- / .row -->

                            <?php if (isset($_GET['s']) && $_GET['s'] == '2') include 'partials/message.php' ?>
                            <div class="d-flex justify-content-end mt-5">
                                <!-- Button -->
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Livewire Component wire-end:WK0ITnSivwHbqZDAgKPx -->
            </div>


            <!-- Card -->
            <div class="card border-0 scroll-mt-3 " id="section3">
                <div class="card-header">
                    <h2 class="h3 mb-0">Payment methods</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end mt-5">
                        <div wire:id="wJBOHV8BsAjSIqQKzFK9">
                            <form method="post" action='includes/walletsub.php' enctype="application/x-www-form-urlencoded">
                                <input type="hidden" name="submit">
                                <div class="row">
                                    <!-- <div class="mb-3 col-md-6">
          <label class="">Bank Name</label>
          <input type="text" name="bankName" class="form-control " placeholder="Enter bank name">
        </div>
        <div class="mb-3 col-md-6">
          <label class="">Account Name</label>
          <input type="text" name="accountName" class="form-control " placeholder="Enter Account name">
        </div> -->
                                    <!-- <div class="mb-3 col-md-6">
          <label class="">Payeer Account ID</label>
          <input type="text" name="payeer_address" class="form-control " placeholder="Enter Payeer Account ID" value="">
        </div>
        <div class="mb-3 col-md-6">
          <label class="">Perfect Money Account ID</label>
          <input type="text" name="perfectmoney_address" class="form-control " placeholder="Enter Perfect Money Account ID" value="">
        </div>  -->
                                    <!-- <div class="mb-3 col-md-6">
          <label class="">Bitcoin</label>
          <input type="text" name="bitcoin_address" class="form-control " placeholder="Enter Bitcoin Address" value="">
          <small class="fs-6">Enter your Bitcoin Address that will be used to withdraw your funds</small>
        </div>
        <div class="mb-3 col-md-6">
          <label class="">Bitcoin Cash</label>
          <input type="text" name="bitcoin_cash_address" class="form-control " placeholder="Enter Bitcoin Cash Address" value="">
          <small class="fs-6">Enter your Bitcoin cash Address that will be used to withdraw your funds</small>
        </div>
        <div class="mb-3 col-md-6">
          <label class="">ERC20</label>
          <input type="text" name="erc20_address" class="form-control " placeholder="Enter ERC20 Address" value="">
          <small class="fs-6">Enter your ERC20 Address that will be used to withdraw your funds</small>
        </div> -->
                                    <div class="mb-3 col-md-6">
                                        <label class="">USDT TRC20</label>
                                        <input type="text" name="ust" class="form-control " placeholder="Enter USDTRC20 Address" value="<?= $user['acc_ust'] ?>">
                                        <small class="fs-6">Enter your USDT TRC20 Address that will be used to withdraw your funds</small>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="">Bitcoin wallet address</label>
                                        <input type="text" name="btc" class="form-control " placeholder="Enter Bitcoin wallet Address" value="<?= $user['acc_btc'] ?>">
                                        <small class="fs-6">Enter your USDC TRC20 Address that will be used to withdraw your funds</small>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Ethereum wallet address</label>
                                        <input type="text" name="eth" class="form-control" placeholder="Enter Ethereum wallet Address" value="<?= $user['acc_eth'] ?>">
                                        <small class="fs-6">Enter your Ethereum wallet Address that will be used to withdraw your
                                            funds</small>
                                    </div>
                                </div>
                                <?php if (isset($_GET['s']) && $_GET['s'] == '3') include 'partials/message.php' ?>
                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-primary">
                                        <div class="spinner-border spinner-border-sm" role="status" wire:loading="">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        Save changes
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Livewire Component wire-end:wJBOHV8BsAjSIqQKzFK9 -->
                    </div>
                </div>
            </div>

            <!-- Card -->
            <?php
            /**
             * <form action="https://www.empirehedge.co/personal-preference" method="post" enctype="application/x-www-form-urlencoded">
                <div class="card border-0 scroll-mt-3 " id="section4">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Notifications</h2>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">In this setcion you will be able to configure the behaviour of notifications
                            in Dashly</p>
                        <div wire:id="v3iM1SxoIuio34qcz5we" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;v3iM1SxoIuio34qcz5we&quot;,&quot;name&quot;:&quot;user.account-settings.update-email-pref&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\/account-settings&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;4dd71097&quot;,&quot;data&quot;:{&quot;emailOnWithdrawal&quot;:&quot;Yes&quot;,&quot;emailOnRoi&quot;:&quot;Yes&quot;,&quot;emailOnExpiration&quot;:&quot;Yes&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6dc55e31ef20ead6f41c78f5ab6a512b45af00f1782ae9e048ffcb085257d053&quot;}}">
                            <!-- Table -->
                            <div class="table-responsive">
                                <table id="notificationsTable" class="table align-middle">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase py-4 align-middle min-w-300px min-w-md-auto">Type</th>
                                            <th class="text-center text-uppercase py-4">
                                                Yes
                                            </th>
                                            <th class="text-center text-uppercase py-4">
                                                No
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable E-mail notification on withdrawal</h3>
                                                <p class="small text-muted mb-0">Send confirmation OTP to my email when withdrawing my funds.</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="radio" name="notification_withdrawal" value="true">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="radio" name="notification_withdrawal" value="false" checked>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable E-mail Notifications on Profit</h3>
                                                <p class="small text-muted mb-0">Send me email when I receive profit</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" name="notification_profit" type="radio" value="true">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" name="notification_profit" type="radio" value="false" checked>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable E-mail Notifications on Expiration</h3>
                                                <p class="small text-muted mb-0">Send me email when my investment plan expires</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" name="notification_expiration" type="radio" value="true">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" name="notification_expiration" type="radio" value="false" checked>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div> <!-- / .table-responsive -->
                            <div class="d-flex justify-content-end mt-5">
                                <!-- Button -->
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:v3iM1SxoIuio34qcz5we -->
                    </div>
                </div>
            </form>
             */
            ?>
            <script>
                // JavaScript to handle scrollspy
                window.addEventListener('scroll', function() {
                    // Loop through sections to find the one in view
                    let sections = document.querySelectorAll('div[id^="section"]');
                    let sidenavItems = document.querySelectorAll('.scrollspy li');

                    sections.forEach(function(section, index) {
                        let bottom = section.getBoundingClientRect().bottom;
                        if (bottom >= 0 && bottom <= window.innerHeight) {
                            // Remove the "active" class from all items
                            sidenavItems.forEach(function(item) {
                                item.classList.remove('active');
                            });

                            // Add the "active" class to the corresponding item
                            sidenavItems[index].classList.add('active');
                        }
                    });
                });
            </script>
            <!-- Card -->

        </div>
    </div>
</div>

<!-- Footer -->
<footer class="mt-auto">
    <div class="container-fluid mt-4 mb-6 text-muted">
        <div class="row justify-content-between">
            <div class="col">
                All Rights Reserved © empirehedge.co 2023
            </div>

            <div class="col-auto">
                <div id="google_translate_element">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT-->
<!-- Theme JS -->

<script src="assets/js/theme.bundle.js"></script>
<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script src="livewire/livewire6406.html?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
    window.livewire = new Livewire();
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v';
    window.deferLoadingAlpine = function(callback) {
        window.addEventListener('livewire:load', function() {
            callback();
        });
    };
    let started = false;
    window.addEventListener('alpine:initializing', function() {
        if (!started) {
            window.livewire.start();
            started = true;
        }
    });
    document.addEventListener("DOMContentLoaded", function() {
        if (!started) {
            window.livewire.start();
            started = true;
        }
    });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
<script src="assets/ext/dist/toastr.min.js"></script>
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '72b452f3afab8a71a5a98a43dc4bf4ae47fee7c5';
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
            o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = '../www.smartsuppchat.com/loaderd41d.js?';
        s.parentNode.insertBefore(c, s);
    })(document);
</script>
<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
</main> <!-- / main -->


</body>

<!-- Mirrored from www.empirehedge.co/manage_account by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:27 GMT -->

</html>