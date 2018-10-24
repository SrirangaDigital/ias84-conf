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
                    <li><a href="#day3">Day 3</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                    <li><a href="#spouses">Spouses Programme</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>2<sup>nd</sup> November 2018 (Friday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0930
                            </dt>
                            <dd>
                                <span class="talk">Registration</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1A: Inauguration &amp; Presidential Address</span><br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1100
                            </dt>
                            <dd>
                                <span class="speaker">Ram Ramaswamy</span><br />
                                JNU, New Delhi<br />
                                <span class="talk">The Uses Of Chance</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1115
                            </dt>
                            <dd>
                                <span class="speaker">Venue: Swatantrata Bhawan</span><br />
                                <span class="talk">Group Photograph</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B: Inaugural Lectures by Fellows</span><br />
                        Chairperson: Dhananjai Pandey, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 -1220
                            </dt>
                            <dd>
                                <span class="speaker">Sanjay Kumar</span><br />
                                BHU, Varanasi<br />
                                <span class="talk">DNA inspired physics</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1225 - 1245
                            </dt>
                            <dd>
                                <span class="speaker">S M Yusuf</span><br />
                                BARC, Mumbai<br />
                                <span class="talk">Low-dimensional spin systems and quantum magnetism</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1250 - 1400 
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C: Inaugural Lectures by Associates</span><br />
                        Chairperson: V C Thakur, Dehradun
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1420
                            </dt>
                            <dd>
                                <span class="speaker">Swati Tripathi</span><br />
                                BSIP, Lucknow<br />
                                <span class="talk">Multiproxy studies on dung of endangered Sangai (Rucervus eldii eldii ) and Hog deer (Axis porcinus) from Manipur, India: Implications to paleoherbivory and paleoecology</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1425 - 1445
                            </dt>
                            <dd>
                                <span class="speaker">Debanjan Bhowmik,</span><br />
                                IIT Delhi, New Delhi<br />
                                <span class="talk">Hardware implementation of neural network algorithms, based on machine learning and neuroscience models, using spintronic devices as non-volatile memory elements</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1530
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1D: Symposium: Materials of Today and Tomorrow</span><br />
                        Chairpersons: A K Ganguli, IIT Delhi, New Delhi, and Giridhar Kulkarni, CeNS, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1530 - 1550
                            </dt>
                            <dd>
                                <span class="speaker">A K Ganguli and Giridhar Kulkarni</span><br />
                                <span class="talk">Introduction</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1555 - 1615
                            </dt>
                            <dd>
                                <span class="speaker">K Vijayamohanan</span><br />CECRI, Karaikudi<br />
                                <span class="talk">Battery materials for electric vehicles: Today and tomorrow</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1620 - 1640
                            </dt>
                            <dd>
                                <span class="speaker">A K Tyagi</span>
                                BARC, Mumbai<br />
                                <span class="talk">Rational design of materials with tailored functionalities</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1645 - 1705
                            </dt>
                            <dd>
                                <span class="speaker">Bikramjit Basu</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Biomaterialomics: Data-driven accelerated pathways for next generation biomaterials</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1710 - 1730
                            </dt>
                            <dd>
                                <span class="speaker">Kanishka Biswas</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Low thermal conductive chalcogenides for high performance thermoelectric energy conversion</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1735 - 1800
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1E: Public Lecture and Cultural Event</span><br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900
                            </dt>
                            <dd>
                                <span class="speaker">Geshe Ngawang Samten</span><br />
                                Central Institute of Higher Tibetan Studies, Varanasi<br />
                                <span class="talk">Public Lecture: Buddhism and science</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1900 - 2000
                            </dt>
                            <dd>
                                <span class="speaker">Smt N Rajam and group</span><br />
                                <span class="talk">Cultural Event: Concert – Three generations on the violin</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                2000 - 2100
                            </dt>
                            <dd>Dinner Break</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="day2">
                    <h3>3<sup>rd</sup> November 2018 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A: Special Lecture</span><br />
                        Chairperson: N Sathyamurthy, JNCASR, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0940
                            </dt>
                            <dd>
                                <span class="speaker">Imran Siddiqi</span><br />
                                CCMB, Hyderabad<br />
                                <span class="talk">GM crops in the Indian context: Looking back, looking forward</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2B: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: E D Jemmis, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0940 - 1000
                            </dt>
                            <dd>
                                <span class="speaker">Aninda J Bhattacharyya</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Electrochemical energy storage via batteries: Prospects and limitations</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1005 - 1025
                            </dt>
                            <dd>
                                <span class="speaker">Deepa Agashe, NCBS, Bengaluru</span><br />
                                <span class="talk">Host–microbial associations in a changing world</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1030 - 1050
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2C: Symposium: Community Health – A Genomic Perspective</span><br />
                        Chairperson: Rajiva Raman, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1050 - 1115
                            </dt>
                            <dd>
                                <span class="speaker">Alok Bhattacharya</span><br />
                                JNU, New Delhi<br />
                                <span class="talk"> Genetics and biology of neuromuscular disorders: Unmet scientific need</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1120 - 1145
                            </dt>
                            <dd>
                                <span class="speaker">D Balasubramanian</span><br />
                                L V Prasad Eye Institute, Hyderabad<br />
                                <span class="talk">Translational research approach: Primary congenital glaucoma – Prevalence, genetics and collaboration between scientists and clinicians for successful treatment</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1150 - 1215
                            </dt>
                            <dd>
                                <span class="speaker">Bhudev C Das</span><br />
                                Amity University, Noida<br />
                                <span class="talk">Public health genomics to innovative targeted therapeutic approaches for relapse-free survival of cancer patients</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1220 -  1245
                            </dt>
                            <dd>
                                <span class="speaker">C S Yajnik</span><br />
                                KEM Hospital Research Centre, Pune<br />
                                <span class="talk">Early life origins of diabetes in Indians</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1250 -  1300
                            </dt>
                            <dd>
                                <span class="talk">Discussion</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1400
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: R K Srivastava, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1420
                            </dt>
                            <dd>
                                <span class="speaker">Bhisma K Patel</span><br />
                                IIT, Guwahati<br />
                                <span class="talk">Fluorescent, AIEgen and cytotoxic behaviour of annulated polcyclic heteroaromatics</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1425 - 1445
                            </dt>
                            <dd>
                                <span class="speaker">S Dayananda</span><br />
                                University of Hyderabad, Hyderabad<br />
                                <span class="talk">Organophosphate hydrolase (OPH) exists as part of Ton complex in Sphingobium fuliginis ATCC27551 and plays a role in active transport of nutrients across energy deprived outer membrane</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1510
                            </dt>
                            <dd>
                                <span class="speaker">Jeevanjyoti Chakraborty</span><br />
                                IIT, Kharagpur<br />
                                <span class="talk">Diffusion, growth, and elasticity in batteries – A mathematical modelling perspective</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1515 - 1535
                            </dt>
                            <dd>
                                <span class="speaker">Srubabati Goswami</span><br />
                                PRL, Ahmedabad<br />
                                <span class="talk">Discovering CP violation in the lepton sector: Challenges and possibilities</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1540 - 1600
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type"></span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1600 -  1730
                            </dt>
                            <dd>
                                <span class="speaker">Venue: Senate Hall, Swatantrata Bhawan</span><br />
                                <span class="talk">Business Meeting of Fellows</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1730 - 1800
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2E: Public Lecture</span><br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900
                            </dt>
                            <dd>
                                <span class="speaker">Shabana Azmi</span><br />
                                Mumbai<br />
                                <span class="talk">Changing faces of women in Hindi cinema</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1900 - 2030
                            </dt>
                            <dd>Dinner</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="day3">
                    <h3>4<sup>th</sup> November 2018 (Sunday)</h3>
                    <div class="session">
                        <span class="type">SESSION 3A: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: S Ananthakrishnan, Savitribai Phule Pune University, Pune<br />
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0920
                            </dt>
                            <dd>
                                <span class="speaker">Suvendra N Bhattacharyya</span><br />
                                IICB, Kolkata<br />
                                <span class="talk">Importance of cellular organelles in controlling miRNA-mediated gene expression in mammalian cells</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0925 - 0945
                            </dt>
                            <dd>
                                <span class="speaker">N B Ramachandra</span><br />
                                University of Mysore, Mysuru<br />
                                <span class="talk">Impact of copy number variations in genome organization, evolution and diseases</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0950 - 1010
                            </dt>
                            <dd>
                                <span class="speaker">Riddhipratim Basu</span><br />
                                ICTS, Bengaluru<br />
                                <span class="talk">Large scale geometry of randomly growing interfaces</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1015 - 1045
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">SESSION 3B: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: R L Karandikar, Chennai Mathematical Institute, Chennai<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1045 - 1105
                            </dt>
                            <dd>
                                <span class="speaker">P Dastidar</span><br />
                                IACS, Kolkata<br />
                                <span class="talk">From serendipity to designing molecular gels for drug delivery</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1110 - 1130
                            </dt>
                            <dd>
                                <span class="speaker">Jayanth Vyasanakere</span><br />
                                Azim Premji University, Bengaluru<br />
                                <span class="talk">Cold fermions in artificial gauge fields</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1135 - 1155
                            </dt>
                            <dd>
                                <span class="speaker">Partha S Chakraborty, IMSc, Chennai</span><br />
                                <span class="talk">Local index formula– Where do we stand today?</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">SESSION 3C: Special Lecture</span><br />
                        Chairperson: N Viswanadham, IISc, Bengaluru<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 - 1240
                            </dt>
                            <dd>
                                <span class="speaker">Vijay Chandru</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">The sciences of the artificial: Promise and reality</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1240 - 1400
                            </dt>
                            <dd>Lunch</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="allied">
                    <br /><br /><span class="type">Allied Events</span><br />
                    <h3>31 October 2018 – 1 November 2018</h3>
                    <ul>
                        <li>IASC–ACS Forum: Expanding Frontiers in Chemical Sciences</li>
                        <li>Advances in Earth System Sciences -A symposiums funded by the Journal of Earth System Sciences</li>
                        <li>Teachers’ interaction session with Fellows and Associates of the Academy</li>
                        <li>Editorial Board meetings of Journal of Earth System Sciences and Pramana - Journal of Physics</li>
                        <li>Exhibition of Academy’s publications (journals and books)</li>
                        <li>Popular Science Workshop by tAcT, the Academy Trust</li>
                    </ul>
                </div>
                <div class="schedule-text" id="spouses">
                    <br /><br /><span class="type">Spouses Programme</span><br />
                    <h3>2<sup>nd</sup> &amp; 3<sup>rd</sup> November 2018</h3>
                    <ul>
                        <li>Vishwanath Temple, BHU</li>
                        <li>Bharat Kala Bhavan, Museum, BHU</li>
                        <li>Ramnagar Fort</li>
                        <li>Sarnath</li>
                    </ul>
                    <h3>4<sup>th</sup> November 2018</h3>
                    <ul>
                            <li>Ganga Aarti, Dashashwamedh Ghat</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
