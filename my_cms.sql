-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 01 apr 2020 kl 13:01
-- Serverversion: 5.7.26
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `my_cms`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `post` varchar(5000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`id`, `heading`, `post`, `date`, `image`, `link`, `published`) VALUES
(20, 'Kaktus – så lyckas du', 'Pryd ditt hem och dina fönster med kaktusar och ge karaktär åt ditt boende. Dessa taggiga växter finns i otaliga varianter, stora som små, och har alla en sak gemensamt – de sköter sig i stort sett själva.\r\n\r\nVad bör man tänka på?\r\nKaktusar finns i miniatyrmodeller och stora som träd. De flesta har vassa taggar och bör således placeras på en plats där man undviker alltför mycket närkontakt. Kaktusar härstammar från varma platser i världen och de vill helst ha det varmt och gott även i din hemmiljö. Gärna runt 25 grader, men de klarar sig i svalare temperaturer också.', '2020-03-29 16:47:44', 'polina-raevskaya-MBPxxeTbI8w-unsplash.jpg', '', 1),
(21, 'Echeveria purple pearl', 'Trivs bäst på en ljus plats, undvik den starkaste solen på sommaren. Växter som denna lagrar vattnet i bladen och kan därför gå ett par veckor utan vattning. Jorden måste torka upp före vattning, gillar inte för mycket vatten. Vattna under och inte på plantan. Gödsel kan du ge 2–3 gånger under sommaren, men halva den rekommenderade dosen.', '2020-03-29 17:01:05', 'annie-spratt-nwQO2HpqcCI-unsplash.jpg', '', 1),
(22, 'Saguarokaktus', 'Saguarokaktus (Carnegiea gigantea) är en kaktus som endast återfinns i Sonoraöknen i sydvästra USA och nordvästra Mexiko. Det är den enda arten i släktet saguarokaktusar (Carnegiea).\r\n\r\nSaguarokaktusen kan bli mycket gammal och vissa exemplar uppskattas vara över 200 år. Saguaron växer långsamt, speciellt i början av sitt liv. En tio år gammal planta är endast cirka fem centimeter stor, men när plantan blir äldre börjar den växa fortare. En gammal saguaro kan bli mellan tio och femton meter hög och har skarpa taggar som är cirka fem centimeter långa.\r\n\r\nSaguarokaktusen börjar inte utveckla sina karaktäristiska armar förrän den blivit runt sex meter hög, vilket sker vid cirka 65 års ålder.\r\n\r\nBlomperioden för en saguaro är maj till juni, då topparna av kaktusen pryds av gräddvita blommor vars mitt är gula. En saguarokaktus börjar dock inte blomma förrän den blivit 2,5 meter hög.\r\n\r\nKaktusens gröna frukter är ovala och runt sju centimeter stora. Fruktköttet är starkt rödfärgad och innehåller upp till 4000 frön, vilket anses vara en av de mest frörika frukterna inom växtvärlden. Frukten är traditionellt en viktig del av kosten i området, både för djur och människa.\r\n\r\nSagaurokaktusblomman är Arizonas delstatsblomma.', '2020-03-29 17:05:54', 'ashim-d-silva-wSfzSv92-d0-unsplash.jpg', '', 1),
(23, 'Suckulent \'Mexico\'', 'Söt, kompakt och otroligt torktålig suckulent med läckra blågrå blad. Trivs i ljust läge, gärna i sol. Vattnas då jorden helt torkat upp, ungefär varje till varannan vecka.', '2020-03-29 17:08:09', 'scott-webb-lYzgtps0UtQ-unsplash.jpg', '', 1),
(24, 'Bladsticklingar av fetbladsväxter', 'Många fetbladsväxter tappar blad så fort man rör vid dem. Det är ett sätt för dem att föröka sig. Ta loss blad och lägg dem på ytan i en kruka med sand, eller jord av hälften sand och hälften jord. Se till att bladfästet har kontakt med sanden och håll jordblandningen lätt fuktig. Vid varje bladfäste bildas så småningom en liten planta och då vissnar bladet.', '2020-03-29 17:10:21', 'florencia-potter-_cYRk2fGKrs-unsplash.jpg', '', 1),
(25, 'Spännande idéer för att plantera en kaktus', 'Kaktusar är väldigt enkla att ha hemma. De kräver lite omvårdnad och kan lätt kombineras med olika inredningar. Läs vidare för att lära dig mer om dem.\r\n\r\nAtt dekorera med kaktusar har blivit något av en trend. Även om de har fått uppmärksamhet sedan antiken har de idag fått en ny uppsving eftersom de är perfekta för små grönområden i hemmet. Att plantera en kaktus är enkelt och de är dessutom extremt lättskötta.', '2020-03-29 17:13:35', '', '', 0),
(26, 'Lyckas med sticklingar!', 'TEMPERATUR. Sticklingar rotar sig bättre och snabbare i en varm jord, så om sticklingar rotar sig långsamt kan man få fart på dem med hjälp av undervärme. Det finns särskilda värmemattor att köpa som man kan placera krukorna på. Bäst rotar sig sticklingarna om jorden är aningen varmare än luften runtomkring.\r\n\r\nFUKTIGHET. Jämn fuktighet är viktigt när man förökar växter. Jorden ska vara jämnt fuktig, men inte blöt. Många sticklingar behöver också hög luftfuktighet, särskilt de med tunna blad. Eftersom sticklingarna inte har några rötter har de svårt att hinna ta upp lika mycket vatten som bladen avdunstar. Man kan använda sig av minidrivhus, genomskinliga plastburkar, glasskivor, plastpåsar eller plastfolie.', '2020-03-29 17:17:06', 'corinne-kutz-7ZtPwmSKj6U-unsplash.jpg', '', 1),
(27, 'Så får du kaktusen att blomma', 'Vårtkaktusarna, Mammillaria, är lätta att få i blom. Särskilt om de ställs under under höst och vår.\r\n \r\nDe flesta kaktusar blommar efter vintervilans svala och torra period då blomknopparna bildas. För några arter räcker det med en temperaturskillnad mellan dag och natt med kalla nätter, det kan du lösa genom att ställa ut kaktusarna under sensommaren och våren. Släkten som är lätta att få i blom är Astrophytum, prickkatkusar, Echinopsis, sjöborrekaktusar, Gymnocalycium, klotkaktusar, Schlumbergera, jul- höst- och vårkaktusar, Mammillaria, vårtkatkusar, Rebutia, kranskaktusar och Rhipsalis, mistelkaktusar.', '2020-03-29 17:19:37', 'lindsey-garcia-Y4Mw73k4pgA-unsplash.jpg', '', 1),
(45, 'Fikonkaktus', 'Opuntia ficus-indica, växer fort till snygga miniträd. Men se upp för taggarna som har hullingar som lätt släpper.', '2020-03-31 09:31:01', 'kyle-glenn-coOZa2c1ss4-unsplash.jpg', '', 1),
(51, 'test med bild igen', 'ta bort bild testa igen', '2020-03-31 11:03:58', '', '', 1),
(52, 'hej med bild', 'ska uppdatera bild\r\n\r\nigen\r\n\r\nigen', '2020-03-31 11:17:15', 'corinne-kutz-7ZtPwmSKj6U-unsplash.jpg', '', 1),
(53, 'hej', 'hej på dig', '2020-03-31 23:27:40', 'ben-weber-Vk-0xwmz-Ig-unsplash.jpg', '', 1),
(54, 'hej', 'hej på dig', '2020-03-31 23:28:31', '', '', 1),
(56, 'Hej', 'hej', '2020-03-31 23:29:36', '', '', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
