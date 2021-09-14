<?= $this->extend('template/layout') ?>

<?= $this->section('jquery')  ?>
<script>
  

 

  

   
</script>
<?= $this->endSection()  ?>

<?= $this->section('content') ?>


<div class="container-fluid">
    <form method="post">

        <div class="tariff-container">

            <p class="cost-container">$ <input type="text" style="border: none;" id="cost" name="tariff" disabled value="1"></p>
            <p>per 1000 view</p>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Create Video</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <h5>MAIN PARAMETERS </h5>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-3 ">
                            <div class="more-detailed"><i class="fab fa-youtube"></i>
                                <button class="btn btn-info">More detailed</button>
                            </div>


                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="form-group"><label>link to a Youtube <span class="text-danger">*</span></label>
                                <input type="text" name="link" class="form-control" value="<?= $link ?? ''  ?>" required placeholder="https://www.youtube.com/watch?v=xePLh9SRfgo">
                            </div>
                            <div class="form-group"><label>Group</label>
                                <select class="form-control" name="group" id="">
                                    <option value="no-group" selected>No Group</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="advertsVideo" type="radio" name="advertsType" checked="" value="video">
                                    <label for="advertsVideo" class="form-check-label">advertise with video</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="youtube" type="radio" name="advertsType" value="youTube">
                                    <label for="youtube" class="form-check-label">need Youtube views</label>
                                </div>

                            </div>
                            <div class="moreDetailed-container">

                                <div class="form-group">
                                    <label>Text on the button</label>
                                    <input type="text" class="form-control" name="buttonText" value="<?= $buttonText ?? ''  ?>" placeholder="More detailed">
                                </div>

                                <div class="form-group">
                                    <label>Link to website</label>
                                    <input type="text" class="form-control" name="redirectUrl" value="<?= $redirectUrl ?? ''  ?>" placeholder="http://example.com">
                                </div>
                            </div>
                            <div class="advertiser_top__attention" style="display: none;">
                                <img src="<?= base_url('/public/img/alert.svg')  ?>" alt="ico">
                                <p>
                                    We cannot guarantee that all views will be counted as this depends on many factors that are beyond our control. </p>
                            </div>



                        </div>

                    </div>
                </div>

                <div id="player" style="display: none;"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>VİEW OPTİONS</h4>
            </div>
            <div class="card-body">
                <div class="container">

                    <div class="row">
                        <h5>Trafic source</h5>
                    </div>

                    <div class="row align-items-center">
                        <div class="form-group d-flex">
                            <div class="form-check">
                                <input type="radio" name="trafic" id="all" class="form-check-group" value="allSources" <?= isset($trafic) ? (($trafic == 'allSources') ? 'checked' : '') : 'checked' ?>>
                                <label for="All Sources">All sources</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="trafic" id="extension" class="form-check-group" value="extensions" <?= isset($trafic) ? (($trafic == 'extensions') ? 'checked' : '') : '' ?>>
                                <label for="Extension">Extension</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="trafic" id="mobileApp" class="form-check-group" value="mobileApp" <?= isset($trafic) ? (($trafic == 'mobileApp') ? 'checked' : '') : '' ?>>
                                <label for="Mobile App">Mobile app</label>
                            </div>
                        </div>

                        <div class="dailyCoverage">
                            <div class="dailyCoverage-content">
                                <h5>38588</h5>
                                <p>Daily coverage</p>
                            </div>
                            <div class="dailyCoverage-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-column">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="duration">Druration of view : <span class="text-info"><i class="far fa-clock"></i></span> <span class="text-info" id="durationLabel"></span></label>
                                <input type="range" value="<?= $duration ?? '4'  ?>" min='4' max='120' name="duration" class="custom-range" id="duration">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="isShowAfterClick" class="custom-control-input" id="showAfter" <?= isset($isShowAfterClick) ? 'checked' : ''  ?>>
                                <label class="custom-control-label" for="showAfter">Do not show after click(+ $0.1)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="isOnlyHQuser" class="custom-control-input" id="onlyHQuser" <?= isset($isOnlyHQuser) ? 'checked' : ''  ?>>
                                <label class="custom-control-label" for="onlyHQuser">Only high-quality users(+ $0.1)</label>
                            </div>
                        </div>



                        <div class="form-group mt-3">
                            <label>Geotargeting</label>
                            <button class="btn btn-outline-info btn-xs clearMultiSelect">clear</button>
                            <div class="select2-purple">
                                <select class="form-control select2" name="geotarget" multiple="multiple" data-placeholder="All selected" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                    <option value="AT,BE,BG,GB,HU,DE,GR,DK,IE,ES,IT,CY,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,FI,FR,HR,CZ,SE,EE">Asian Union </option>
                                    <option value="RU,BY,UA,TJ,TM,UZ,KZ,AM,AZ,MD">European Union </option>
                                    <option value="RU">Russia </option>
                                    <option value="UA">Ukraine </option>
                                    <option value="BY">Belarus </option>
                                    <option value="KZ">Kazakhstan </option>
                                    <option value="AZ">Azerbaijan </option>
                                    <option value="AM">Armenia </option>
                                    <option value="GE">Georgia </option>
                                    <option value="IL">Israel </option>
                                    <option value="US">USA </option>
                                    <option value="CA">Canada </option>
                                    <option value="KG">Kyrgyzstan </option>
                                    <option value="LV">Latvia </option>
                                    <option value="LT">Lithuania </option>
                                    <option value="EE">Estonia </option>
                                    <option value="MD">Moldova </option>
                                    <option value="TJ">Tajikistan </option>
                                    <option value="TM">Turkmenistan </option>
                                    <option value="UZ">Uzbekistan </option>
                                    <option value="AU">Australia </option>
                                    <option value="AT">Austria </option>
                                    <option value="AL">Albania </option>
                                    <option value="DZ">Algeria </option>
                                    <option value="AS">American Samoa </option>
                                    <option value="AI">Anguilla </option>
                                    <option value="AO">Angola </option>
                                    <option value="AD">Andorra </option>
                                    <option value="AG">Antigua and Barbuda </option>
                                    <option value="AR">Argentina </option>
                                    <option value="AW">Aruba </option>
                                    <option value="AF">Afghanistan </option>
                                    <option value="BS">Bahamas </option>
                                    <option value="BD">Bangladesh </option>
                                    <option value="BB">Barbados </option>
                                    <option value="BH">Bahrain </option>
                                    <option value="BZ">Belize </option>
                                    <option value="BE">Belgium </option>
                                    <option value="BJ">Benin </option>
                                    <option value="BM">Bermuda </option>
                                    <option value="BG">Bulgaria </option>
                                    <option value="BO">Bolivia </option>
                                    <option value="BA">Bosnia and Herzegovina </option>
                                    <option value="BW">Botswana </option>
                                    <option value="BR">Brazil </option>
                                    <option value="BN">Brunei Darussalam </option>
                                    <option value="BF">Burkina Faso </option>
                                    <option value="BI">Burundi </option>
                                    <option value="BT">Bhutan </option>
                                    <option value="VU">Vanuatu </option>
                                    <option value="GB">United Kingdom </option>
                                    <option value="HU">Hungary </option>
                                    <option value="VE">Venezuela </option>
                                    <option value="VG">British Virgin Islands </option>
                                    <option value="VI">US Virgin Islands </option>
                                    <option value="TL">East Timor </option>
                                    <option value="VN">Vietnam </option>
                                    <option value="GA">Gabon </option>
                                    <option value="HT">Haiti </option>
                                    <option value="GY">Guyana </option>
                                    <option value="GM">Gambia </option>
                                    <option value="GH">Ghana </option>
                                    <option value="GP">Guadeloupe </option>
                                    <option value="GT">Guatemala </option>
                                    <option value="GN">Guinea </option>
                                    <option value="GW">Guinea-Bissau </option>
                                    <option value="DE">Germany </option>
                                    <option value="GI">Gibraltar </option>
                                    <option value="HN">Honduras </option>
                                    <option value="HK">Hong Kong </option>
                                    <option value="GD">Grenada </option>
                                    <option value="GL">Greenland </option>
                                    <option value="GR">Greece </option>
                                    <option value="GU">Guam </option>
                                    <option value="DK">Denmark </option>
                                    <option value="DM">Dominica </option>
                                    <option value="DO">Dominican Republic </option>
                                    <option value="EG">Egypt </option>
                                    <option value="ZM">Zambia </option>
                                    <option value="EH">Western Sahara </option>
                                    <option value="ZW">Zimbabwe </option>
                                    <option value="IN">India </option>
                                    <option value="ID">Indonesia </option>
                                    <option value="JO">Jordan </option>
                                    <option value="IQ">Iraq </option>
                                    <option value="IR">Iran </option>
                                    <option value="IE">Ireland </option>
                                    <option value="IS">Iceland </option>
                                    <option value="ES">Spain </option>
                                    <option value="IT">Italy </option>
                                    <option value="YE">Yemen </option>
                                    <option value="CV">Cape Verde </option>
                                    <option value="KH">Cambodia </option>
                                    <option value="CM">Cameroon </option>
                                    <option value="QA">Qatar </option>
                                    <option value="KE">Kenya </option>
                                    <option value="CY">Cyprus </option>
                                    <option value="KI">Kiribati </option>
                                    <option value="CN">China </option>
                                    <option value="CO">Colombia </option>
                                    <option value="KM">Comoros </option>
                                    <option value="CG">Congo </option>
                                    <option value="CD">Congo, Democratic Republic </option>
                                    <option value="CR">Costa Rica </option>
                                    <option value="CI">Côte d`Ivoire </option>
                                    <option value="CU">Cuba </option>
                                    <option value="KW">Kuwait </option>
                                    <option value="LA">Laos </option>
                                    <option value="LS">Lesotho </option>
                                    <option value="LR">Liberia </option>
                                    <option value="LB">Lebanon </option>
                                    <option value="LY">Libya </option>
                                    <option value="LI">Liechtenstein </option>
                                    <option value="LU">Luxembourg </option>
                                    <option value="MU">Mauritius </option>
                                    <option value="MR">Mauritania </option>
                                    <option value="MG">Madagascar </option>
                                    <option value="MO">Macau </option>
                                    <option value="MK">Macedonia </option>
                                    <option value="MW">Malawi </option>
                                    <option value="MY">Malaysia </option>
                                    <option value="ML">Mali </option>
                                    <option value="MV">Maldives </option>
                                    <option value="MT">Malta </option>
                                    <option value="MA">Morocco </option>
                                    <option value="MQ">Martinique </option>
                                    <option value="MH">Marshall Islands </option>
                                    <option value="MX">Mexico </option>
                                    <option value="FM">Micronesia </option>
                                    <option value="MZ">Mozambique </option>
                                    <option value="MC">Monaco </option>
                                    <option value="MN">Mongolia </option>
                                    <option value="MS">Montserrat </option>
                                    <option value="MM">Myanmar </option>
                                    <option value="NA">Namibia </option>
                                    <option value="NR">Nauru </option>
                                    <option value="NP">Nepal </option>
                                    <option value="NE">Niger </option>
                                    <option value="NG">Nigeria </option>
                                    <option value="CW">Curaçao </option>
                                    <option value="NL">Netherlands </option>
                                    <option value="NI">Nicaragua </option>
                                    <option value="NU">Niue </option>
                                    <option value="NZ">New Zealand </option>
                                    <option value="NC">New Caledonia </option>
                                    <option value="NO">Norway </option>
                                    <option value="AE">United Arab Emirates </option>
                                    <option value="OM">Oman </option>
                                    <option value="IM">Isle of Man </option>
                                    <option value="NF">Norfolk Island </option>
                                    <option value="KY">Cayman Islands </option>
                                    <option value="CK">Cook Islands </option>
                                    <option value="TC">Turks and Caicos Islands </option>
                                    <option value="PK">Pakistan </option>
                                    <option value="PW">Palau </option>
                                    <option value="PS">Palestine </option>
                                    <option value="PA">Panama </option>
                                    <option value="PG">Papua New Guinea </option>
                                    <option value="PY">Paraguay </option>
                                    <option value="PE">Peru </option>
                                    <option value="PN">Pitcairn Islands </option>
                                    <option value="PL">Poland </option>
                                    <option value="PT">Portugal </option>
                                    <option value="PR">Puerto Rico </option>
                                    <option value="RE">Réunion </option>
                                    <option value="RW">Rwanda </option>
                                    <option value="RO">Romania </option>
                                    <option value="SV">El Salvador </option>
                                    <option value="WS">Samoa </option>
                                    <option value="SM">San Marino </option>
                                    <option value="ST">São Tomé and Príncipe </option>
                                    <option value="SA">Saudi Arabia </option>
                                    <option value="SZ">Swaziland </option>
                                    <option value="SH">Saint Helena </option>
                                    <option value="KP">North Korea </option>
                                    <option value="MP">Northern Mariana Islands </option>
                                    <option value="SC">Seychelles </option>
                                    <option value="SN">Senegal </option>
                                    <option value="VC">Saint Vincent and the Grenadines </option>
                                    <option value="KN">Saint Kitts and Nevis </option>
                                    <option value="LC">Saint Lucia </option>
                                    <option value="PM">Saint Pierre and Miquelon </option>
                                    <option value="RS">Serbia </option>
                                    <option value="SG">Singapore </option>
                                    <option value="SY">Syria </option>
                                    <option value="SK">Slovakia </option>
                                    <option value="SI">Slovenia </option>
                                    <option value="SB">Solomon Islands </option>
                                    <option value="SO">Somalia </option>
                                    <option value="SD">Sudan </option>
                                    <option value="SR">Suriname </option>
                                    <option value="SL">Sierra Leone </option>
                                    <option value="TH">Thailand </option>
                                    <option value="TW">Taiwan </option>
                                    <option value="TZ">Tanzania </option>
                                    <option value="TG">Togo </option>
                                    <option value="TK">Tokelau </option>
                                    <option value="TO">Tonga </option>
                                    <option value="TT">Trinidad and Tobago </option>
                                    <option value="TV">Tuvalu </option>
                                    <option value="TN">Tunisia </option>
                                    <option value="TR">Turkey </option>
                                    <option value="UG">Uganda </option>
                                    <option value="WF">Wallis and Futuna </option>
                                    <option value="UY">Uruguay </option>
                                    <option value="FO">Faroe Islands </option>
                                    <option value="FJ">Fiji </option>
                                    <option value="PH">Philippines </option>
                                    <option value="FI">Finland </option>
                                    <option value="FK">Falkland Islands </option>
                                    <option value="FR">France </option>
                                    <option value="GF">French Guiana </option>
                                    <option value="PF">French Polynesia </option>
                                    <option value="HR">Croatia </option>
                                    <option value="CF">Central African Republic </option>
                                    <option value="TD">Chad </option>
                                    <option value="CZ">Czech Republic </option>
                                    <option value="CL">Chile </option>
                                    <option value="CH">Switzerland </option>
                                    <option value="SE">Sweden </option>
                                    <option value="SJ">Svalbard and Jan Mayen </option>
                                    <option value="LK">Sri Lanka </option>
                                    <option value="EC">Ecuador </option>
                                    <option value="GQ">Equatorial Guinea </option>
                                    <option value="ER">Eritrea </option>
                                    <option value="ET">Ethiopia </option>
                                    <option value="KR">South Korea </option>
                                    <option value="ZA">South Africa </option>
                                    <option value="JM">Jamaica </option>
                                    <option value="JP">Japan </option>
                                    <option value="ME">Montenegro </option>
                                    <option value="DJ">Djibouti </option>
                                    <option value="SS">South Sudan </option>
                                    <option value="VA">Vatican </option>
                                    <option value="SX">Sint Maarten </option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba </option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="viewPerPerson">The number of view per person is not more than (+ $0.1)</label>
                                <select class="form-control" name="viewPerPerson" id="viewPerPerson">
                                    <option value="0" <?= isset($viewPerPerson) ? (($viewPerPerson == 0) ? 'selected' : '') : 'selected'  ?>>No limits </option>
                                    <option value="1" <?= isset($viewPerPerson) ? (($viewPerPerson == 1) ? 'selected' : '') : ''          ?>>1 views </option>
                                    <option value="2" <?= isset($viewPerPerson) ? (($viewPerPerson == 2) ? 'selected' : '') : ''          ?>>2 views </option>
                                    <option value="3" <?= isset($viewPerPerson) ? (($viewPerPerson == 3) ? 'selected' : '') : ''          ?>>3 views </option>
                                    <option value="4" <?= isset($viewPerPerson) ? (($viewPerPerson == 4) ? 'selected' : '') : ''          ?>>4 views </option>
                                    <option value="5" <?= isset($viewPerPerson) ? (($viewPerPerson == 5) ? 'selected' : '') : ''          ?>>5 views </option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="viewPerHour">Numbers of views per hour (+ $0.1)</label>
                                <select class="form-control" name="viewPerHour" id="viewPerHour">
                                    <option value="0" <?= isset($viewPerHour) ? (($viewPerHour == 0) ? 'selected' : '') : 'selected'  ?>>No limits </option>
                                    <option value="500" <?= isset($viewPerHour) ? (($viewPerHour == 500) ? 'selected' : '') : ''          ?>>500 views per hour </option>
                                    <option value="200" <?= isset($viewPerHour) ? (($viewPerHour == 200) ? 'selected' : '') : ''          ?>>200 views per hour </option>
                                    <option value="100" <?= isset($viewPerHour) ? (($viewPerHour == 100) ? 'selected' : '') : ''          ?>>100 views per hour </option>
                                    <option value="60" <?= isset($viewPerHour) ? (($viewPerHour == 60) ? 'selected' : '') : ''          ?>>60 views per hour </option>
                                    <option value="30" <?= isset($viewPerHour) ? (($viewPerHour == 30) ? 'selected' : '') : ''          ?>>30 views per hour </option>
                                    <option value="10" <?= isset($viewPerHour) ? (($viewPerHour == 10) ? 'selected' : '') : ''          ?>>10 views per hour </option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="language">Language</label>
                                <select class="form-control" name="language">
                                    <option value="all" <?= isset($language) ? (($language == 'all') ? 'selected' : '') : 'selected'  ?>>All languages </option>
                                    <option value="en" <?= isset($language) ? (($language == 'en') ? 'selected' : '') : ''          ?>>English </option>
                                    <option value="tr" <?= isset($language) ? (($language == 'tr') ? 'selected' : '') : ''          ?>>Turkish </option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center">

                            <div class="form-group">
                                <a href="<?= base_url('addAdvertiser')  ?>" class="back-button">Back </a>
                            </div>

                            <div class="form-group mr-auto">
                                <button type="submit" name="submit" value="save" class="btn btn-outline-primary"><i class="far fa-save"></i> Save</button>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" value="start" class="btn btn-primary"><i class="fas fa-play"></i> Start </button>
                            </div>



                        </div>

                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>