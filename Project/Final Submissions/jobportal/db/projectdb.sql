-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 02:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Cart_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Register_Id` int(11) NOT NULL,
  `JOB_ID` int(11) NOT NULL,
  PRIMARY KEY (`Cart_ID`),
  UNIQUE KEY `Register_Id` (`Register_Id`,`JOB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `Description_ID` int(11) NOT NULL AUTO_INCREMENT,
  `JobSummary` mediumtext NOT NULL,
  `Requirements` mediumtext NOT NULL,
  `Responsibilities` mediumtext NOT NULL,
  `JOB_ID` varchar(30) NOT NULL,
  PRIMARY KEY (`Description_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`Description_ID`, `JobSummary`, `Requirements`, `Responsibilities`, `JOB_ID`) VALUES
(1, 'KregToolCompanymanufacturesawidevarietyoftoolsaccessoriesandequipmentforwoodworkersanddo-it-yourselfersOurproductsareavailablethroughoutNorthAmericaandinthenationsmajorHomeImprovementstoressuchasLowesHomeDepotandMenardsOurcorefocusistomakeourcustomersravingfanscontributepositivelytothecommunityeconomyandassistemployeesinachievingpersonalgrowthandsuccessHeadquarteredinHuxleyIAjustoffI-35betweenDesMoinesandAmesweofferanentrepreneurialenvironmentcasualdresscodeandacompetitivecompensationpackagewhichincludesbasepaysemi-annualbonusesandfullbenefitsWeareexperiencingrapidgrowthandemployover165employees', 'BachelorsDegreeorequivalentexperienceincluding5yearsofsalesandmarketingexperiencerequired2yearsofpreviousinternationalsalesexperiencerequiredPrevioussalesandormarketingpersonnelmanagementpreferredKnowledgeofadvertisingandsalespromotiontechniquespreferredWorkrequiressignificanttraveltocurrentandpotentialclientsoutsideofthecontinentalUSAandCanadaThisrequiresthepossessionofavalidstatedriverslicenseandpassportTravelrequirementsofupto30andeachtripmaylast7-21daysMustbeproficientwiththeMicrosoftSuiteofproductsWordExcelPowerPointandothergeneraladministrativesoftwareprogramsStrongunderstandingofmarketsservedrequiredConsumergoodssalesexperienceinthetoolssegmentispreferredWoodworkingexperiencepreferred', 'AssistDirectorofSalesindeveloping12and3yearstrategicgoalstoachievecompanybusinessobjectivesManagedirectsalesteammembersandorindependentsalesrepresentativestoachievecompanysalesgoalsAssistDirectorofSalesindevelopingpricingandprogramstoserveinternationaldealernetworkPresentandsellcompanyproductsandservicestocurrentandpotentialclientsPrepareactionplansandschedulestoidentifyspecifictargetsandtoprojectthenumberofcontactstobemadeFollowuponnewleadsandreferralsresultingfromfieldactivityIdentifysalesprospectsandcontacttheseandotheraccountsasassignedEstablishandmaintaincurrentclientandpotentialclientrelationshipsManageaccountservicesthroughqualitychecksandotherfollow-upIdentifyandresolveclientconcernsParticipateinmarketingeventssuchasseminarstradeshowsandtelemarketingeventsFollow-upforcollectionofpayment', '12323'),
(2, 'We are seeking an Accounting Assistant to report and record ticket sales, prepare deposits and reconcile bank accounts. Dealing with any ticketing accounting situations is a major function of this position', 'hdfkjsdhfdfsf', 'dfskfhdjkfsdfhk', '34225'),
(8, 'Cloud Computing is the next step toward ubiquitous and pervasive computing. Azure is Microsoft’s world-class cloud computing platform used to build, host, and scale web applications and is one of the major strategic thrusts in Microsoft’s Services and Devices Strategy.   Azure is an open platform enabling hosting of both Windows and Linux applications and supports numerous languages such as .NET, Java, Node.js, and PHP.   Come join the Azure team in the Enterprise Partner Group (EPG) as a Cloud Solution Architect and be front and center in our customer’s transformation to cloud-based architectures while at the same time playing an influential role in transforming Microsoft to a Devices & Services company.\r\nAs a Cloud Solution Architect, your primary responsibility with be to move customer workloads to Azure. The CSA is a technical customer facing role that will be accountable for the end-to-end customer cloud deployment experience.   You will own the Azure technical customer engagement including specific implementation projects and/or Proofs of Concept (POCs). \r\nThe ideal candidate will have experience in customer facing roles and had success leading technical and economic value discussions with senior customer executives that drive key decisions and implementation.   The success of this role depends on collaboration with generalists and specialists in the MSFT field and delivery teams (including partners, services, product engineering)  ', '5+ years of management and success in consultative / complex sales processes where necessary, managing various stakeholders (Primary:   TDM, Secondary:   BDM) relationships to get consensus on solution / projects.  5+ year’s design and/or implementation and/or support of highly distributed applications (i.e. having an architectural sense for ensuring availability, reliability, etc.). 2+ years’ experience in “migrating” on premise workloads to the cloud.Technical prowess and passion-especially for Windows Azure, modern Application design practices and principles.Oversight experience on major transformation projects and successful transitions to implementation support teams.', 'In this role, you would be responsible for:.\r\nInterfacing with both the generalists and specialists in the Microsoft sales and delivery teams (including partners, services, Internal Microsoft Product / Service organizations) focused on consumption of the Azure platform in high potential accounts.\r\nExecuting quick technical feasibility and proposal development for moving identified workloads to Azure (i.e. quick and dirty, comfortable with 80-20 rule).\r\nBuilding a technical and security architecture in Azure for the selected apps/workloads.\r\nLead compliance assessments with the customer on designed Azure architecture.\r\nSelecting a migration approach to lift and shift the workloads to Azure or architecting a greenfield development and/or production platform for new applications.\r\nExecuting limited POCs, if necessary. Driving the quality of the onboarding plan (with MCS or partners).\r\nReporting to customer as business objectives / business value conditions are met.\r\nEnsuring plan execution and Azure consumption targets are met.\r\nDocumenting and sharing technical best practices / insights with engineering and the architect community.\r\nKey Qualifications:.   \r\nUnderstanding of cloud computing technologies, business drivers, and emerging computing trends.\r\nProven track record of building technical and business relationships with senior executives and growing wallet share in large or highly strategic accounts.\r\nProven track record of driving decisions collaboratively, resolving conflicts and ensuring follow through.\r\nProblem-solving mentality leveraging internal and/or external resources, where and when needed, to do what’s right for the customer and for the organization (i.e. think through workarounds, evaluate risk of various deployment options, etc.).\r\nExceptional verbal and written communication.\r\n.Ability to connect technology with measurable business value.\r\nDemonstrated technical thought leadership in customer facing situations\r\n', ''),
(15, 'CloudComputingisthenextsteptowardubiquitousandpervasivecomputingAzureisMicrosoftsworld-classcloudcomputingplatformusedtobuildhostandscalewebapplicationsandisoneofthemajorstrategicthrustsinMicrosoftsServicesandDevicesStrategyAzureisanopenplatformenablinghostingofbothWindowsandLinuxapplicationsandsupportsnumerouslanguagessuchasNETJavaNodejsandPHPComejointheAzureteamintheEnterprisePartnerGroupEPGasaCloudSolutionArchitectandbefrontandcenterinourcustomerstransformationtocloud-basedarchitectureswhileatthesametimeplayinganinfluentialroleintransformingMicrosofttoaDevicesServicescompanyAsaCloudSolutionArchitectyourprimaryresponsibilitywithbetomovecustomerworkloadstoAzureTheCSAisatechnicalcustomerfacingrolethatwillbeaccountablefortheend-to-endcustomerclouddeploymentexperienceYouwillowntheAzuretechnicalcustomerengagementincludingspecificimplementationprojectsandorProofsofConceptPOCsTheidealcandidatewillhaveexperienceincustomerfacingrolesandhadsuccessleadingtechnicalandeconomicvaluediscussionswithseniorcustomerexecutivesthatdrivekeydecisionsandimplementationThesuccessofthisroledependsoncollaborationwithgeneralistsandspecialistsintheMSFTfieldanddeliveryteamsincludingpartnersservicesproductengineering', '5yearsofmanagementandsuccessinconsultativecomplexsalesprocesseswherenecessarymanagingvariousstakeholdersPrimaryTDMSecondaryBDMrelationshipstogetconsensusonsolutionprojects5yearsdesignandorimplementationandorsupportofhighlydistributedapplicationsiehavinganarchitecturalsenseforensuringavailabilityreliabilityetc2yearsexperienceinmigratingonpremiseworkloadstothecloudTechnicalprowessandpassion-especiallyforWindowsAzuremodernApplicationdesignpracticesandprinciplesOversightexperienceonmajortransformationprojectsandsuccessfultransitionstoimplementationsupportteams', 'InthisroleyouwouldberesponsibleforInterfacingwithboththegeneralistsandspecialistsintheMicrosoftsalesanddeliveryteamsincludingpartnersservicesInternalMicrosoftProductServiceorganizationsfocusedonconsumptionoftheAzureplatforminhighpotentialaccountsExecutingquicktechnicalfeasibilityandproposaldevelopmentformovingidentifiedworkloadstoAzureiequickanddirtycomfortablewith80-20ruleBuildingatechnicalandsecurityarchitectureinAzurefortheselectedappsworkloadsLeadcomplianceassessmentswiththecustomerondesignedAzurearchitectureSelectingamigrationapproachtoliftandshifttheworkloadstoAzureorarchitectingagreenfielddevelopmentandorproductionplatformfornewapplicationsExecutinglimitedPOCsifnecessaryDrivingthequalityoftheonboardingplanwithMCSorpartnersReportingtocustomerasbusinessobjectivesbusinessvalueconditionsaremetEnsuringplanexecutionandAzureconsumptiontargetsaremetDocumentingandsharingtechnicalbestpracticesinsightswithengineeringandthearchitectcommunityKeyQualificationsUnderstandingofcloudcomputingtechnologiesbusinessdriversandemergingcomputingtrendsProventrackrecordofbuildingtechnicalandbusinessrelationshipswithseniorexecutivesandgrowingwalletshareinlargeorhighlystrategicaccountsProventrackrecordofdrivingdecisionscollaborativelyresolvingconflictsandensuringfollowthroughProblem-solvingmentalityleveraginginternalandorexternalresourceswhereandwhenneededtodowhatsrightforthecustomerandfortheorganizationiethinkthroughworkaroundsevaluateriskofvariousdeploymentoptionsetcExceptionalverbalandwrittencommunicationAbilitytoconnecttechnologywithmeasurablebusinessvalueDemonstratedtechnicalthoughtleadershipincustomerfacingsituations', '934167'),
(22, 'Are you a motivated, customer-focused individual looking for an inside sales career without the hassle of cold calling?  At GEICO, our stellar reputation and creative marketing campaigns have customers calling us for their insurance needs!  Our insurance sales associates take inbound sales calls from highly interested potential policyholders. \r\nWere looking for sales savvy candidates who are interested in a career with outstanding growth and earnings potential.  After completing our industry-leading, paid sales training, youll need to pass your state licensing exam.  From there, you’ll be a licensed insurance sales professional, equipped to sell an exceptional product.', 'High school diploma or equivalent. Prior sales experience or strong desire to work in sales . Demonstrated job stability. Solid computer, grammar and multi-tasking skills. Strong attention to detail, time management and decision-making skills. Must be comfortable working in a fast-paced, high volume call center', 'Monthly bonus potential for meeting sales goals .\r\nRaises and promotions based upon your performance. Professional development opportunities through GEICO University. Coaching and feedback to help you further develop your sales skills . Top performers in Sales are rewarded as part of our Chairman’s Club Award', '1048'),
(23, 'lfjsldfj', 'lsjldjsj', 'kldfjs', '344');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `JOB_ID` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Field` varchar(30) NOT NULL,
  `Description_ID` int(11) NOT NULL,
  `Job_Type` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`,`JOB_ID`),
  UNIQUE KEY `Description_ID` (`Description_ID`),
  UNIQUE KEY `JOB_ID` (`JOB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `JOB_ID`, `Title`, `Location`, `Field`, `Description_ID`, `Job_Type`) VALUES
(1, '12323', 'International Sales Manager', 'Austin, TX', 'Sales', 1, 'Full Time'),
(2, '34225', 'Accounts', 'Austin, TX', 'Accounts', 2, 'Full-Time'),
(4, '934167', 'Solution Architect', 'United States, Charlotte (NC)', 'Sales', 15, 'Full-Time'),
(11, '1048', 'Sales Representative - Coralvi', 'Iowa - Coralville', 'Sales', 22, 'Full-Time'),
(12, '344', 'sjdkljsl', 'kldfjljdgf', 'jdljsd', 23, 'jklsdjflsdj');

-- --------------------------------------------------------

--
-- Table structure for table `jobhistory`
--

CREATE TABLE IF NOT EXISTS `jobhistory` (
  `Job_ID` int(11) NOT NULL,
  `Register_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Job_ID`),
  UNIQUE KEY `Job_ID` (`Job_ID`,`Register_ID`),
  KEY `jobhistory_ibfk_1` (`Register_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobhistory`
--

INSERT INTO `jobhistory` (`Job_ID`, `Register_ID`, `Date`) VALUES
(12323, 1, '2015-11-30'),
(34225, 1, '2015-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Login_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Active` varchar(30) NOT NULL,
  `Usertype` varchar(30) NOT NULL,
  PRIMARY KEY (`Login_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_ID`, `Username`, `Password`, `Active`, `Usertype`) VALUES
(1, 'sri', 'sri', 'true', 'user'),
(2, 'sid', 'sid', 'true', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Register_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Field` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `Login_ID` int(11) NOT NULL,
  PRIMARY KEY (`Register_ID`),
  UNIQUE KEY `Login_ID` (`Login_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_ID`, `FirstName`, `LastName`, `Field`, `Country`, `State`, `City`, `Street`, `Login_ID`) VALUES
(1, 'Srikant', 'Iyengar', 'CS', 'USA', 'TX', 'Dallas', 'peper place', 1),
(2, 'Siddharth', 'Abhimanyu', 'CS', 'USA', 'WA', 'Seattle', 'nffdnkddnf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `Resume_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Register_ID` int(11) NOT NULL,
  `Resume` blob NOT NULL,
  PRIMARY KEY (`Resume_ID`),
  UNIQUE KEY `Register_ID` (`Register_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Register_Id`) REFERENCES `register` (`Register_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Description_ID`) REFERENCES `description` (`Description_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobhistory`
--
ALTER TABLE `jobhistory`
  ADD CONSTRAINT `jobhistory_ibfk_1` FOREIGN KEY (`Register_ID`) REFERENCES `register` (`Register_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`Login_ID`) REFERENCES `login` (`Login_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`Register_ID`) REFERENCES `register` (`Register_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
