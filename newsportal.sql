-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 09:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(56, 'Politics', 3),
(68, 'Business', 2),
(69, 'Sports', 3),
(70, 'Health', 2),
(72, 'Entertainment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(72, 'Balen Shah elected Mayor of Kathmandu, Sunita Dangol Deputy Mayor', 'Kathmandu Metropolitan City has elected independent hopeful Balendra \'Balen\' Shah as its new Mayor.\r\nLikewise, Sunita Dangol has been favoured as the Deputy Mayor by a majority of metropolis voters. As per the Election Commission, at the end of vote count of all 32 wards of KMC, it was found that 61,767 city residents had entrusted Shah with their votes, thereby sealing his vicotry in the recently held Mayoral elections.Meanwhile, Nepali Congress\' candidate Sirjana Shrestha finished second with 38,341 votes while CPN-UML endorsed candidate received 38,117 votes.In what was initially expected to be a battle between the two political heavyweights, Shah, who independently fought the elections under the \'stick\' symbol, beat his closest contender by a wide margin of 23, 426 votes.Sunita Dangol is the city\'s new Deputy MayorCPN-UML\'s deputy-mayoral candidate Sunita Dangol has been chosen the victor in what seemed like a one-way run from the beginning of the vote counting process.Defeating her closest electoral-rival ruling-alliance\'s Rameshwar Shrestha by a landslide margin of 44,806, Dangol also registered the highest number of popular votes received in KMC elections.She gained 68,612 votes as against 23,806 votes received by CPN (Unified Socialist) candidate Shrestha.', '56', '27 May, 2022', 'Safal Adhikari', 'balenjfif.jfif'),
(73, 'Newly elected Dharan mayor swings into action', 'Harkaraj Rai, who was elected the mayor of Dharan Sub-metropolitan City with popular support, came out to sweep the road in the city today.Citing that his campaign was to make Dharan a clean and beautiful city, the newly elected mayor showed up for road cleaning campaign with a broom in his hand. He cleaned the road at Bhanuchowk and bus park areas. As the mayor himself came out with a broom in his hand, the municipality sanitation staff, city police, locals and representatives of different organisations also joined the elected local representative in his campaign.\"I came out to clean the road myself because I want to create awareness among the public to keep their homes and vicinity clean,\" he said.He urged the locals not to throw garbage randomly and develop a habit of managing the garbage at their homes.\"I want to make Dharan the cleanest city in the entire country. Since I can\'t do it on my own, I need the support of residents here,\" he said.Rai, who was deployed to repair the source of a drinking water project in Sardukhola and manage water distribution yesterday, said he was always committed to resolving the problems faced by the people.\"We have many problems and they cannot be solved by the mayor barricading himself in his office. So, rather than ensconcing myself in my office, I would visit each and every ward, learn about the problems there and do whatever it takes to resolve the problems,\" he said.Today itself, he also inspected the public toilet at Bhanuchowk and instructed the staff there to pay attention to the sanitation of the facility.', '56', '27 May, 2022', 'Safal Adhikari', 'download.jfif'),
(74, 'Oli takes govt to task from rostrum of Lower House', 'CPN-UML Chair and main opposition leader KP Sharma Oli today spoke for three hours from the rostrum of the House of Representatives to denounce government\'s policies and programmes and its handling of foreign affairs.He condemned the government for allowing the United States\' Under Secretary for Civilian Security, Democracy, and Human Rights and the US Special Coordinator for Tibetan Issues, Uzra Zeya, to visit monasteries. \"This government is helpless before foreign dignitaries because it fears losing power.Why can we not be honest about our relations with our neighbours?\" Oli wondered.He said the government was not sensitive towards Nepal\'s relations with China.During Zeya\'s visit to Nepal, she had also visited a Tibetan refugee camp. China often condemns western diplomats for meeting Tibetan refugees or religious figures.Oli claims that since he had taken permission from Humla chief district officer to visit an area there, a foreign diplomat must also seek permission for visiting places in Nepal. Oli refuted one leader\'s claim that he had 20 to 40 billion rupees in his bank account.\"If I have that much amount in my account, I am ready to transfer it to the account of the same leader,\" he said. He added that he and his wife had announced that all their moveable and immovable property would be state\'s property. \"Can any leader, particularly the former prime minister who often takes swipe at me, declare that they would give all their moveable and immoveable property to the state?\" he added.Oli also assailed Prime Minister Sher Bahadur Deuba for not accepting eminent persons group\'s report on Nepal-India relations. He said the PM should accept the report and tell citizens what it contained.He accused the Deuba government of using unfair means to influence local polls. He said Nepali Congress leaders had said if NC representatives did not win in particular places, the federal government would not allocate budget for those places. He said the government did not say anything new in its policies and programmes.\"This document is devoid of any plan to increase domestic production, to control trade deficit, and to help form capital.\"', '56', '27 May, 2022', 'Safal Adhikari', 'download (1).jfif'),
(75, 'BII celebrates $100 million milestone in Nepal', 'British International Investment (BII), the newly rebranded UK government\'s development finance institution (DFI) formerly known as Commonwealth Development Corporation, and Colonial Development Corporation (CDC), has announced that it has invested over $100 million in Nepal.During a press meet held at the British Embassy today, the DFI reaffirmed its commitment to continue building relationships with businesses that increase economic activities, leverage its expertise to support innovation and work with partners to help bring more investments that can accelerate Nepal\'s development priorities. Talking to media persons, BII CEO Nick O-Donhoe announced that the BII, following its rebranding and start of its new five-year strategy, will pursue investment opportunities in Nepal that can drive innovation and boost digital transformation.He stated that the BII will also devote its patient and long term capital to help increase climate resilience and clean infrastructure across its markets, including Nepal.\"We will deploy 30 per cent of our investments in Asia and Africa towards climate finance and continue to support the growth of renewable energy generation as we have been doing through the Upper Trishuli Hydropower Project, doing our part to increase the supply of clean and reliable energy for millions of Nepali people and businesses,\"Donohoe said.He further said, \"We are currently working with two banks in Nepal and we would like to work with more of them. The biggest barrier to working with more banks is related to environmental, social, governmental standards. So I think there is a real opportunity for Nepali banks if they embrace some high standards and attract a broader range of foreign capital.\"He also said that the BII will support young, ambitious entrepreneurs who are creating businesses that offer solutions that can transform societies, adding that the BII is already doing it through \'Invest for Impact Nepal\', a first-of-its-kind market shaping platform that was launched in 2021.\"This will help foreign direct investment into Nepal and unlock the country\'s growth potential,\" he said.Meanwhile, British Ambassador to Nepal, Nicola Pollitt shared that supporting sustainable economic development in Nepal is the top priority for the embassy. \"BII\'s investments in Nepal are a part of the UK\'s overarching support toward this larger goal.Our programmes are working with the Nepal government towards improving the country\'s investment environment and with the private sector to build local market capabilities to attract foreign investors such as BII.\"The BII has been investing in Nepal for more than four years, and officially established its presence in the country in 2020 with the appointment of Rabi Rayamajhi as country representative.Portfolio in a nutshellBII\'s portfolio of over $100 million in Nepal is supporting five businesses and one fund, across a variety of sectors including financial services, clean infrastructure and telecommunications.These investments include:• Providing capital through a $15 million loan to NMB Bank, enabling the bank to extend its lending to support key sectors including SMEs, infrastructure, agriculture as well as foreign currency-earning sectors such as tourism and hydropower projects.• Improving access to affordable and quality internet through a $12 million investment with WorldLink, which is helping to stimulate productivity in Nepal.• Increasing access to clean and reliable energy supply for millions of people and businesses across the country by investing $21.9 million in the Upper Trishhuli Hydropower Project, which is expected to create over 20,000 jobs across multiple sectors.• Supporting Nepal\'s post-pandemic economic recovery and increasing green finance by investing in the $40 million first close of Dolma Impact Fund II and a $25 million loan in Global IME Bank.• Supporting critical trade for several financial institutions in Nepal through partnership with Standard Chartered Bank.', '68', '27 May, 2022', 'Safal Adhikari', 'download (2).jfif'),
(76, 'Govt to reduce fuel taxes by Rs 10 per litre', 'Owing to protests and criticisms over the recent fuel price hike, the government is finally preparing to reduce fuel taxes by Rs 10 per litre.\r\n\r\nRecently, the government has increased the price of petrol, diesel, kerosene, cooking gas and aviation fuel, for the second time in the fortnight, inviting protests from stakeholders.\r\n\r\nFollowing that, the council of ministers allowed the Ministry of Finance to decrease the fuel taxes by Rs 10 lived on each litre of petrol and diesel.\r\n\r\n“The final decision is yet to be made,” informs a source at the ministry.\r\n\r\nThe source says the government will reduce Rs 5 from the infrastructure tax and Rs 5 from the customs charge.', '68', '27 May, 2022', 'Safal Adhikari', 'petrol_pump.jpg'),
(77, 'Tender for Nepal T20 League is open', 'Nepal Cricket Association (NCA) has invited an open tender to purchase teams in the upcoming, Nepal T20 League.\r\n\r\nA public press release has been issued by CAN today inviting interested investors to buy the team for the competition which will be held from 24 September to 22 October.\r\n\r\nThe deadline for the tender organized by CAN for the first time is June 10. CAN\'s board meeting last Tuesday approved six names. These include Biratnagar, Janakpur, Kathmandu, Pokhara, Lumbini-Bhairahawa and Far Western.', '69', '27 May, 2022', 'Safal Adhikari', 'Cricket_Association_of_Nepal_CAN1650893362_480X320.jpg'),
(78, 'Nepali cricketers\' salary increased', 'According to the Cricket Association of Nepal (CAN), the monthly salary increases for male and female players of the national cricket team, field staff and office assistants, and pitch curator of the cricket ground at Tribhuvan University, Kirtipur has come into effect since April 1, 2022.\r\n\r\nAccordingly, the monthly salary of all the players in the central contract of the national men\'s cricket team has been increased by Rs 10,000. The monthly salary of players in the women\'s national cricket team has been increased by Rs 5,000 and for B and A grade players have been increased by Rs 6,000.\r\n\r\n\r\n\r\nLikewise, the monthly salary of all field staff has been increased by 3,000 and the monthly salary of field office assistants has been increased by 5,000. The monthly salary of the Pitch Curator has been increased by Rs 6,000.\r\n\r\nMeanwhile, CAN announced to not acknowledge any other leagues nationally as it will operate its own official league.\r\n\r\nHowever, it has decided to allow the operation in the structure of the regional league.\r\n\r\nThe Nepal franchise league is expected to end as this could harm not only the cricket players but also the development of cricket as a whole.\r\n\r\nCAN also announced the names of Biratnagar, Janakpur, Kathmandu, Pokhara, Lumbini, Bhairahawa, and Far Western teams for the Nepal T20 League.', '69', '27 May, 2022', 'Safal Adhikari', '274507209_2291104307705267_3723897838945403203_n1653468090_1200.jpg'),
(79, 'WHO chief Tedros reappointed to second five-year term', 'WHO Director-General Tedros Adhanom Ghebreyesus was reappointed to a second five-year term on Tuesday by the UN health agency’s member countries.\r\n\r\nNo other candidate challenged Tedros for the post amid the ongoing difficulties of responding to the devastating coronavirus pandemic.\r\n\r\n“This is overwhelming,” Tedros said after another World Health Organization official asked everyone in the room to stand and applaud him. Fighting back tears, Tedros described himself as “a child of war” after signing the contract for his extension. He said that after witnessing his younger brother’s death at an early age, it was “luck (that) brought me all the way here.”\r\n\r\nTedros, a former government minister from Ethiopia, has directed WHO throughout its management of the global response to COVID-19 and withstood occasionally withering criticism over its multiple missteps. He is the first African to lead the agency and the only director-general not qualified as a medical doctor.\r\n\r\nHe is also the first WHO leader not to be supported by their home country; Ethiopia has previously accused Tedros of “ misconduct ” after his sharp criticism of the war and humanitarian crisis there and raised concerns about his leadership on Tuesday.\r\n\r\nUnder Tedros, the UN health agency failed to call out countries including China for blunders that WHO officials grumbled about privately, advised against mask-wearing for months, and said initially that the coronavirus wasn’t likely to mutate rapidly. Scientists drafted by WHO to investigate the coronavirus’ origins in China said the critical probe was “ stalled ” last year, after issuing a report that even Tedros acknowledged had prematurely ruled out the possibility of a laboratory leak.\r\n\r\n“There have been some mishaps, but Tedros has also been a steady voice throughout the pandemic, advocating for an equitable response,” said Javier Guzman, director of global health policy at the Center for Global Development in Washington.\r\n\r\nHe said despite reservations about Tedros’ leadership, some countries weren’t willing to push for change.\r\n\r\n“We are in the middle of the pandemic and there is some pressure for consistent leadership to take us through this difficult moment,” Guzman said.\r\n\r\nTedros has frequently railed against rich countries for hoarding the world’s limited supply of vaccines and insisted that pharmaceuticals aren’t doing enough to make their medicines available to the poor. Amid the near-universal focus on Ukraine after the Russian invasion, Tedros slammed the global community for not doing enough to solve crises elsewhere, including Yemen, Syria and Afghanistan, arguing that it was possible because those suffering weren’t white.\r\n\r\nStill, critics say Tedros has failed on some fundamental issues, like holding staff accountable after allegations that dozens of outbreak workers managed by WHO sexually abused young women in Congo during an Ebola outbreak that began in 2018, in one of the biggest sex scandals in UN history. None of the senior WHO managers alerted to the abuse allegations and who did little to stop the exploitation have been fired.\r\n\r\nIn January, The Associated Press reported that staffers in WHO’s Western Pacific office filed an internal complaint accusing regional director Dr Takeshi Kasai of abusive, racist and other misconduct, undermining efforts to stem the spread of COVID-19. In response, Tedros said an investigation into the allegations had been launched and promised to act “with urgency.”\r\n\r\nBut last week, several WHO staffers wrote to the agency’s Executive Board complaining that Kasai “has been able to continue his unethical, abusive and racist conduct without any form of restriction.” In an email to staff, Kasai disputed the charges.\r\n\r\nPublic health expert Guzman said the apparent culture of impunity at WHO was problematic.\r\n\r\n“We do need to see a stronger (WHO) director-general going forward, where misconduct is not tolerated,” he said, calling for extensive reforms to make the agency accountable.\r\n\r\nAs Tedros begins his second term, some experts have also raised concerns that WHO isn’t fulfilling its primary role as a technical agency providing science-based guidance to countries.\r\n\r\nDr David Tomlinson, a cardiologist who has campaigned for better protective equipment for health workers in Britain’s health system, says he has been appalled by WHO advice, most notably their reluctance to acknowledge that COVID-19 is widely spread in the air. In July 2020, more than 230 scientists published a paper appealing to WHO to recognize the coronavirus was airborne; that later prompted the organization to alter some of its recommendations.\r\n\r\nTomlinson and others say Tedros should ensure WHO’s the top priority during future health emergencies is evaluating the science.\r\n\r\n“They have perpetuated untruths that have ultimately led to the deaths of millions of people,” he said, citing the estimated 15 million people who have died during the pandemic. “We need an agency that’s unafraid to tell the truth, but that’s unfortunately not what we have.”', '70', '27 May, 2022', 'Safal Adhikari', '1000_(2)1653457208_1200.jpeg'),
(80, 'Monkeypox likely spread by sex at 2 raves in Europe', 'A leading adviser to the World Health Organization described the unprecedented outbreak of the rare disease monkeypox in developed countries as “a random event” that might be explained by risky sexual behaviour at two recent mass events in Europe.\r\n\r\nIn an interview with The Associated Press, Dr David Heymann, who formerly headed WHO’s emergency department, said the leading theory to explain the spread of the disease was sexual transmission among gay and bisexual men at two raves held in Spain and Belgium. Monkeypox has not previously triggered widespread outbreaks beyond Africa, where it is endemic in animals.\r\n\r\n“We know monkeypox can spread when there is close contact with the lesions of someone who is infected, and it looks like sexual contact has now amplified that transmission,” said Heymann.\r\n\r\nThat marks a significant departure from the disease’s typical pattern of spread in central and western Africa, where people are mainly infected by animals like wild rodents and primates and outbreaks have not spread across borders.\r\n\r\nTo date, WHO has recorded more than 90 cases of monkeypox in a dozen countries including Britain, Spain, Israel, France, Switzerland, the US and Australia.\r\n\r\nMadrid’s senior health official said on Monday that the Spanish capital has recorded 30 confirmed cases so far. Enrique Ruiz Escudero said authorities are investigating possible links between a recent Gay Pride event in the Canary Islands, which drew some 80,000 people, and cases at a Madrid sauna.\r\n\r\nHeymann chaired an urgent meeting of WHO’s an advisory group on infectious disease threats on Friday to assess the ongoing epidemic and said there was no evidence to suggest that monkeypox might have mutated into a more infectious form.\r\n\r\nMonkeypox typically causes fever, chills, rash, and lesions on the face or genitals. It can be spread through close contact with an infected person or their clothing or bed sheets, but sexual transmission has not yet been documented. Most people recover from the disease within several weeks without requiring hospitalization. Vaccines against smallpox, a related disease, are also effective in preventing monkeypox and some antiviral drugs are being developed.\r\n\r\nThe disease can be fatal in about 10% of infections, but no deaths have been reported in the current cases.\r\n\r\nWHO said the outbreak is “atypical” and said the fact that cases are being seen in so many different countries suggests the disease may have been silently spreading for some time. The agency’s Europe director warned that as summer begins across the continent, mass gatherings, festivals and parties could accelerate the spread of monkeypox.\r\n\r\nOther scientists have pointed out that it will be difficult to disentangle whether it is sex itself or the close contact related to sex that has driven the recent spread of monkeypox across Europe.\r\n\r\n“By nature, the sexual activity involves intimate contact, which one would expect to increase the likelihood of transmission, whatever a person’s sexual orientation and irrespective of the mode of transmission,” said Mike Skinner, a virologist at Imperial College London.\r\n\r\nOn Sunday, the chief medical adviser of Britain’s Health Security Agency, Dr Susan Hopkins, said she expected more monkeypox cases to be identified in the country “on a daily basis.”\r\n\r\nU.K. officials have said, “a notable proportion” of the cases in Britain and Europe have been in young men with no history of travel to Africa and who are gay, bisexual or have sex with men. Authorities in Portugal and Spain also said their cases were in men who mostly had sex with other men and whose infections were picked up when they sought help for lesions at sexual health clinics.\r\n\r\nHeymann, who is also a professor of infectious diseases at the London School of Hygiene and Tropical Medicine, said the monkeypox outbreak was likely a random event that might be traceable to a single infection.\r\n\r\n“It’s very possible there was somebody who got infected, developed lesions on the genitals, hands or somewhere else, and then spread it to others when there was sexual or close physical contact,” Heymann hypothesized. “And then there were these international events that seeded the outbreak around the world, into the US and other European countries.”\r\n\r\nHe emphasized that the disease was unlikely to trigger widespread transmission.\r\n\r\n“This is not COVID,” he said. “We need to slow it down, but it does not spread in the air and we have vaccines to protect against it,” Heymann said studies should be conducted rapidly to determine if monkeypox could be spread by people without symptoms and that populations at risk of the disease should take precautions to protect themselves.', '70', '27 May, 2022', 'Safal Adhikari', '1000_(27)1652940291_1200.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `role`) VALUES
(27, 'Prameshwor Dharel', 'prameshwordharel@gmail.com', '321', 1),
(30, 'Safal ', 'safal@gmail.com', '123456', 1),
(73, 'manoj', 'manoj@gmail.com', '321', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
