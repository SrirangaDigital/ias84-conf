<script type="text/javascript">
    $(document).ready(function() {

        var mTop = $('.navbar').height() - 10;
        $('#grid').css('margin-top', mTop + 'px');
        $('.schedule-text').hide();

        var hloc = window.location.href;

        var tab = 'day1';
        if(hloc.match('#')){ tab = hloc.split("#")[1]; }

        $('#' + tab).show(function(){

            $('a[href="#' + tab + '"').parent().addClass('active');
            $("html, body").animate({scrollTop: 0}, 1);
        });

        $('.schedule .nav li a').on('click', function(event){

            event.preventDefault();
            tab = $(this).attr('href');
            $('.schedule-text').hide();
            $(tab).show(function(){

                window.location.hash = tab;
                $("html, body").animate({scrollTop: 0}, 1);
            });
            $('.schedule .nav li').removeClass('active');
            $(this).parent().addClass('active');
        });
    });
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                    <li><a href="#spouses">Spouses Programme</a></li>
                    <li><a href="#cultural">Cultural Event</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>29 June 2018 (Friday)</h3>
                    <div class="session">
                        <span class="type">Session 1A – Special Lecture</span><br /><br />
                        Chairperson: H Sharat Chandra, Centre for Human Genetics, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1010<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528533237319">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">G Nageswara Rao</span><br />
                                LVPEI, Hyderabad<br />
                                <span class="talk">Research, relevance and public good</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B : Inaugural Lectures of Fellows/Associates</span><br /><br />
                        Chairperson: Aswini Ghosh, IACS, Kolkata<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1010 - 1030<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528541501386">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ritabrata Munshi</span><br />
                                ISI, Kolkata<br />
                                <span class="talk">The subconvexity problem</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1035 - 1055<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528541501386">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">P. Anbarasan</span><br />
                                IIT, Chennai<br />
                                <span class="talk">Transition metal catalyzed selective functionalization of metallocarbenes to N-Heterocycles</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1120
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: E Arunan, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1120 - 1140<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545446261">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Anuradha Dube</span><br />
                                CDRI, Lucknow<br />
                                <span class="talk">Kala-Azar - a neglected disease of poverty: Search for affordable lasting cure</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1145 - 1205<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545530857">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">C Narayana</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Application of Raman spectroscopy from condense matter to biology</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1210 - 1230<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545619677">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ramesh Hariharan</span><br />
                                Strand Life Sciences, Bengaluru<br />
                                <span class="talk">Industrializing genomic diagnoses in India</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1235 - 1255<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545718404">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">V K Gahalaut</span><br />
                                MoES, New Delhi<br />
                                <span class="talk">India plate motion and its interaction with Eurasian plate along the Himalayan and Indo-Burmese arc</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1430
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1D – Symposium on “Remembering Francis Crick: A multifaceted visionary scientist”</span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1430 - 1500<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528546354066">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Yamuna Krishnan</span><br />
                                University of Chicago, USA<br />
                                <span class="talk">Quantitative chemical imaging in vivo</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1500 - 1530<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528546786186"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Rajan Sankaranarayanan</span><br />
                                CCMB, Hyderabad<br />
                                <span class="talk">Transfer RNAs: Not merely adaptor molecules in protein synthesis</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1530 - 1600<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528547130878"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Souvik Maiti</span><br />
                                IGIB, New Delhi<br />
                                <span class="talk">RNA G-Quadruplex: Re-Search</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1600 - 1630<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528547603085"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Manju Bansal</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Francis Crick: A Renaissance scientist</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1630 - 1700
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1E – Public Lecture</span><br />
                        Chairperson: R Ramaswamy, JNU, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780213265"><i class="fa fa-info-circle"></i></a>
                            </dt>
                            <dd>
                                <span class="speaker">Upinder Singh</span><br />
                                University of Delhi, Delhi<br />
                                <span class="talk">Politics and violence: Ancient debates on a perennial problem</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1900
                            </dt>
                            <dd>
                                <span class="aux">Cultural event</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                2000
                            </dt>
                            <dd>
                                <span class="aux">Dinner</span>
                            </dd>
                        </dl>
                    </div>                    
                </div>                        
                <div class="schedule-text" id="day2">
                    <h3>30 June 2018 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: Anil K Gupta, IIT, Kharagpur<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 0950<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780285315">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Manoj Kumar</span><br />
                                GNDU, Amritsar<br />
                                <span class="talk">Development of fluorescent probes for molecular recognition, bio-imaging and catalytic applications</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0955 - 1015<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780338082">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Prabal K Maiti</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Structure, dynamics and thermodynamics of confined water</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1020 - 1040<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780460560">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Nagasuma Chandra</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Identification of a host biomarker signature for detecting tuberculosis through a blood test</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1040 - 1100
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2B – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: Chairperson: H Shekar Shetty, University of Mysore, Mysore<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1120<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780532447">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Swagata Dasgupta</span><br />
                                IIT, Kharagpur<br />
                                <span class="talk">The evolving story of protein polyphenol interactions</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1125 - 1145<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780601967">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Varun Bhalerao</span><br />
                                IIT, Mumbai<br />
                                <span class="talk">Cosmic fireworks: Shining light on gravitational wave sources!</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1150 - 1210<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780746120">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Maitrayee DasGupta</span><br />
                                University of Calcutta, Kolkata<br />
                                <span class="talk">Challenges in extending Symbiotic Nitrogen Fixation beyond current host range</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1215 - 1235<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780820756">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Souvik Mahapatra</span><br />
                                IIT, Mumbai<br />
                                <span class="talk">Reliability of CMOS IC chips - from atoms to processors</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1240 - 1300<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780884615">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">C T Dhanya</span><br />
                                IIT, New Delhi<br />
                                <span class="talk">Hydrological Extremes and Hazard Modeling - Exploring the intricacies and predictability of the regional hydrologic system</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1430
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2C – Symposium on “Blockchains and Cryptocurrency”</span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1430 - 1500<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780997404">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Madhavan Mukund</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Introduction to blockchains</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1500 - 1530<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781102284">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Bimal Roy</span><br />
                                ISI, Kolkata<br />
                                <span class="talk">Cryptographic Primitives for Block Chains</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1530-1600<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781151167">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">S P Suresh</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Bitcoin -- economic aspects</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1600-1630<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781202981">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">R L Karandikar</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Blockchains: Beyond Crypto currency</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1630 - 1700
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D – Special Lecture</span><br />
                        Chairperson:  N Mukunda, Bengaluru<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                1700 - 1740<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578970512">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">R Sukumar</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Thinking long-term in ecology: Insights from 3-decades of monitoring a tropical forest in Mudumalai</span>
                            </dd>
                        </dl>
                    </div>        
                </div>
                <div class="schedule-text" id="allied">
                    <h3>28 June 2018 (Thursday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 1400<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="https://drive.google.com/open?id=1VfVdg-YurSRt3uQaPN2XqXMFAekt-XNc"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">INYAS Symposium in memory of Dr. Vijay Pal Yadav: Living in a Changing Environment</span><br />
                                Venue: Jawaharlal Nehru Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1730<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Science Outreach co-organised by INYAS, Mysore Science Foundation and the Academy Trust</span><br />
                                Venue: Teresian High School, Siddharta Nagar<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1200 - 1300<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Teacher's Interaction with Fellows and SEP Members</span><br />
                                Venue: Akbar hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1715<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="https://drive.google.com/open?id=1WHqaK7DG_bl4l_vIE6zhOq1awQV35IjF"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">SEP Symposium for Invited Teachers</span><br />
                                Venue: Akbar hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1800<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Science Education Panel’s Meeting</span><br />
                                Venue: M Visvesvaraya Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <h3>29 June 2018 (Friday)</h3>
                        <dl class="dl-horizontal">
                            <dt>
                                0000 - 0000<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Tact outreach</span><br />
                                Venue: <br />
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <h3>30 June 2018 (Saturday)</h3>
                        <dl class="dl-horizontal">
                            <dt>
                                1830 - 2030<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">tAcT Board Meeting</span><br />
                                Venue: Naidu Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1130<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Editorial Board Meeting – Journal of Mathematical Sciences</span><br />
                                Venue: Nelson Mandela Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <h3>1 July 2018 (Sunday)</h3>
                        <dl class="dl-horizontal">
                            <dt>
                                0930<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Council meeting</span><br />
                                Venue: M Visvesvaraya Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1000<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="javascript:void(0);"></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Editorial Board Meeting – Resonance</span><br />
                                Venue: Sarojini Naidu Hall, Infosys campus, Mysore<br />
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="spouses">
                    <br /><br /><span class="type">Spouses Programme</span><br />
                    <h3>29 June 2018 (Friday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1230
                            </dt>
                            <dd>
                                <span class="speaker">Tour of CFTRI followed by lunch at CFTRI</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1400
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Railway Museum</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <h3>30 June 2018 (Saturday)</h3>
                        <dl class="dl-horizontal">
                            <dt>
                                0930
                            </dt>
                            <dd>
                                <span class="speaker">Chamundi Hills</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1100
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Jaganmohan Palace</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1200
                            </dt>
                            <dd>
                                <span class="speaker">Visit to  St. Philomena’s Church</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1300
                            </dt>
                            <dd>
                                <span class="speaker">Lunch</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1400
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Mysore Palace</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1600
                            </dt>
                            <dd>
                                <span class="speaker">Shopping</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1730
                            </dt>
                            <dd>
                                <span class="speaker">Brindavan Gardens</span><br />
                                <p><strong><small>Please note that participants will be required to walk around 2 km in and around the gardens.</small></strong></p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="cultural">
                    <h2>YAKSHAGANA</h2>
                    <p>Yakshagana is a folk art of coastal Karnataka, supported and popularized mainly by temples over the years. Today, it enjoys international recognition. Stories for the field drama are chosen mainly from Ramayana and Mahabharatha and the characters have special costumes and typical headgears. The Bhagavatha who sings the story line controls the play. The actors express the emotions and dance with skill to the accompaniment of Maddala and Chende.</p>
                    <p>There are 2 styles recognized for their identity. The Thenku thittu (Southern style) and Badagu thittu (Northern style), which are easily recognized by the dressers and the style of dance.</p>
                    <p>In this cultural event, the act will be performed in the Northern style, by a professional group called <strong>Saligrama Mela.</strong> The play enacted is ABHIMANYU KALAGA or CHAKRAVYUHA from Mahabharatha.</p>
                    <p>The actors are</p>
                    <ol>
                        <li>Bhagavath : Sri Raghavendra Mayya Haladi</li>
                        <li>Maddale : Sri Parameshwara Bhandary</li>
                        <li>Chende : Sri Shivananda Kota</li>
                    </ol>
                    <p><strong>Actors:</strong></p>
                    <ol>
                        <li>Abhimanyu : Sri Chandrahasa Gowda</li>
                        <li>Subhadre : Sri Shashikanth Shetty</li>
                        <li>Dharmaraya : Sri Anantha K</li>
                        <li>Drona : Sri Prasanna Shettigar</li>
                        <li>Kourava : Sri Narasimha Gaokar</li>
                        <li>Dushyashana : Sri Dinesh Kannaru</li>
                        <li>Karna : Sri Thumbri Bhaskara</li>
                        <li>Jayadratha : Sri Harish Japthi</li>
                    </ol>
                    <p><strong>Manager:</strong> Sri P.Kishan Hegde Palli</p>
                    <p><strong>The Story Line:</strong></p>
                    <p>Abhimanyu Kalaga (Chakravyuha)<br />In the Mahabharatha war, fought between Kouravas and Pandavas at Kurukshetra, Bhishma the first senapathi of the Kouravas retires from the war after 10 days, choosing to lie on a bed of arrows. Dronacharya was crowned as the next senapathi. Duryodhana asks for a victory. Drona agrees but wants Krishna and Arjuna to be sent away, and to be engaged in a separate battle with Samasapthakas. Duryodhana agrees. Drona organizes the army in the ‘Chakravyuha’ system. Only Drona, Krishna and Arjuna know how to enter and come out of this in a war. Arjuna’s son Abhimanyu knows how to enter but does not know how to come out of it.</p>
                    <p>Pandavas are worried now. Who will fight the war with Krishna and Arjuna away? Dharmaraja is in a dilemma. What should be done to find a person to break the ‘Chakravyuha’?</p>
                    <p>Abhimanyu comes to know of this and compels his uncle Dharmaraja to permit him to proceed to the battlefield.  Dharmaraja refuses at first because of Abhimanyu’s age but later reluctantly agrees to send him with Bhima and others for support. After meeting his worried mother Subhadra and consoling her, Abhimanyu goes to the war front to enter the ‘Chakravyuha’</p>
                    <p>Jayadratha was posted at the entry to prevent anybody from breaking the vyuha. Abhimanyu defeats Jayadratha and succeeds in entering ‘Chakravyuha’ but Jayadratha successfully prevents others accompanying him from entering the ‘Chakravyuha’.</p>
                    <p>Once in, Abhimanyu defeats all those who encounter him. Drona, Karna, Korava and others miserably fail to contain him. Drona is worried that Abhimanyu would annihilate the entire army and none in their camp can stop him. He orders Karna to cut Abhimanyu’s bow from behind, while all of them engage him in front. Karna opposes this cheating but finally agrees to obey the orders.</p>
                    <p>Together all the great warriors join to fight the unaccompanied Abhimanyu in the ‘Chakravyuha’. To his surprise, Abhimanyu, while fighting, notices the mischief of somebody cutting his bow and turning back asks Karna “who taught you this cheating”.</p>
                    <p>The bow gone, Abhimanyu fights fearlessly with other weapons facing all the opponents. Together, all of them join to kill the lonely Abhimanyu in ‘Chakravyuha’.</p>
                    <p>The performance will showcase the undaunted Abhimanyu’s great fight in ‘Chakravyuha’</p>
                    <p>Incidentally, this is the Golden Jubilee year of Sri Guruprasadhitha Yakshagana Mandali, Saligrama. Their services and efforts to keep the traditional values of the folk art are greatly appreciated.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
