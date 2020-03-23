-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Mar-2020 às 23:04
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pandorabox2_5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `favoritoId` int(11) NOT NULL,
  `FK_midiaId` int(11) DEFAULT NULL,
  `FK_usuarioId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `favoritos`
--

INSERT INTO `favoritos` (`favoritoId`, `FK_midiaId`, `FK_usuarioId`) VALUES
(6, 5, 1),
(7, 10, 1),
(8, 3, 1),
(9, 13, 1),
(11, 14, 1),
(18, 15, 1),
(19, 17, 1),
(21, 38, 1),
(24, 9, 1),
(25, 40, 1),
(26, 41, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `midia`
--

CREATE TABLE `midia` (
  `midiaId` int(11) NOT NULL,
  `tipo_midia` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipo_conteudo` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nome_completo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nome_capa` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `img_capa` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ano_lancamento` int(4) DEFAULT NULL,
  `num_episodios` int(3) DEFAULT NULL,
  `num_temporadas` int(1) DEFAULT NULL,
  `genero` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `duracao` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `faixa_etaria` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descri` text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `link_midia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `link_amv` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `link_trailer` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `link_intru` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `num_temporada` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `data_adicao` date DEFAULT NULL,
  `data_modificacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `midia`
--

INSERT INTO `midia` (`midiaId`, `tipo_midia`, `tipo_conteudo`, `nome_completo`, `nome_capa`, `img_capa`, `ano_lancamento`, `num_episodios`, `num_temporadas`, `genero`, `duracao`, `faixa_etaria`, `descri`, `link_midia`, `link_amv`, `link_trailer`, `link_intru`, `num_temporada`, `data_adicao`, `data_modificacao`) VALUES
(2, 'anime', '', 'The Rising of the Shield Hero', 'Tate No Yuusha', 'Tate_No_yuusha.jpg', 2013, 25, 1, 'Action, Adventure, Drama, Fantasy', '(+ou-) 24 minutos', '', 'Iwatani Naofumi foi convocado para um mundo paralelo junto com outras 3 pessoas para se tornarem os Heroes do mundo. Cada um dos heróis ao serem convocados recebeu um equipado lendário dado aos Heroes que salvariam aquele mundo. Naofumi passou a receber o Legendary Shield, o único equipamento defensivo, enquanto os outros receberam armas capazes de atacar. Devido à falta de carisma e experiência de Naofumi, ele acabou com apenas um único companheiro de equipe, uma mulher bonita, enquanto outros tiveram vários. Infelizmente, no terceiro dia, Naofumi foi traído, falsamente acusado e roubado pela sua unica colega de Equipe. Após o decreto do Rei, vários rumores falsos se espalharam por toda parte sobre o Heroi do escudo. Agora Naofumi terá que lidar com uma vida difícil sendo odiado em outro mundo, em quanto luta para sobreviver e se fortalecer', 'https://www.crunchyroll.com/pt-br/the-rising-of-the-shield-hero', 'https://www.youtube.com/watch?v=sAgbRQQz1io', '', 'https://www.youtube.com/watch?v=jZvFEtR8RH0', '1', '2019-12-24', '2020-02-10'),
(3, 'anime', '', 'Sword Art Online', 'S.A.O.', 'Sword_Art_Online.jpg', 2012, 25, 4, 'Action, Adventure, Fantasy, Game, Romance', '(+ou-) 24 minutos', '', 'Escapar é impossível até o jogo ser completado, um game over significa uma verdadeira morte. Sem saber a verdade da misteriosa nova geração do RPG, Sword Art Online, aproximadamente 10 mil jogadores logaram juntos, abrindo as cortinas para essa cruel batalha mortal. Jogando sozinho, o protagonista Kirito imediatamente aceitou a verdade desse RPG, e no mundo do jogo, em um castelo flutuante gigante chamado Aincrad, ele se distinguiu como um jogador solitário. Buscando completar o jogo alcançando o andar mais alto, Kirito arriscadamente continua sozinho. Por causa de um convite agressivo de uma guerreira e especialista em esgrima, Asuna, ele se juntou a ela. Esse encontro trouxe uma oportunidade para chamar pelo destinado Kirito.', 'https://www.google.com/search?ei=0RYyXbnQCc7C5OUP0IaJ2AI&q=Sword+art+online+animes+online&oq=Sword+art+online+animes+online&gs_l=psy-ab.3..35i39j0i7i30l9.4037.14428..15526...11.0..0.427.53', 'https://www.youtube.com/watch?v=efAmVNWW-ls', '', 'https://www.youtube.com/watch?v=OsLY7DXWsF4', '1', '2019-12-24', '2020-02-10'),
(4, 'anime', '', 'Enen no Shouboutai', 'Faire Force', 'fire_force.jpg', 2019, 24, 1, 'Action, Supernatural, Shounen', '(+ou-) 24 minutos', '', 'No ano de 198 da Era Solar em Tóquio, ha bombeiros especiais que lutam contra um fenômeno chamado “Combustão Humana”, onde humanos são transformados em monstros chamados “Infernais”. Os Infernais vieram da primeira geração de combustão humana, as gerações que vieram depois tem a capacidade de manipular as chamas, mantendo sua forma humana. Shinra Kusakabe, nosso protagonista, tem o apelido de “Chamas do Demônio” ou Pegadas do Demônio” por causa de sua habilidade de acender chamas a vontade em seus pés. Ele acaba entrando em uma equipe chamada “Fire Force” que também ha Usuários de chamas.', 'https://www.google.com/search?ei=YNZFXcv2D7nX5OUPk9asiA4&q=fire+Force+animes+online&oq=fire+Force+animes+online&gs_l=psy-ab.3..35i39j0i22i30l9.837.3314..3806...0.0..0.241.1823.0j13j1......', 'https://www.youtube.com/watch?v=Am-Qg3Uf09U', '', 'https://www.youtube.com/watch?v=JBqxVX_LXvk', '1', '2019-12-24', '2020-02-09'),
(5, 'anime', '', 'Demon Slayer', 'Kimersu no Yaiba', 'demon_slayer.jpg', 2019, 26, 1, 'Action, Demons, Historical, Shounen, Supernatural', '(+ou-) 24 minutos', '', 'Japão, era Taisho. Tanjiro, um bondoso jovem que ganha a vida vendendo carvão, descobre que sua família foi massacrada por um demônio. E pra piorar, Nezuko, sua irmã mais nova e única sobrevivente, também foi transformada num demônio. Arrasado com esta sombria realidade, Tanjiro decide se tornar um matador de demônios para fazer sua irmã voltar a ser humana, e para matar o demônio que matou sua família. Um triste conto sobre dois irmãos, onde os destinos dos humanos e dos demônios se entrelaçam, começa agora.', 'https://www.google.com/search?ei=ZD86XduHEtqd5OUP48GzqAc&q=kimetsu+no+yaiba+animes+online&oq=kimetsu+no+yaiba+animes+online&gs_l=psy-ab.3..35i39j0j0i22i30l8.1319.3620..4059...0.0..0.323.28', 'https://www.youtube.com/watch?v=N5LUkp7j2gQ', '', 'https://www.youtube.com/watch?v=pmanD_s7G3U', '1', '2019-12-24', '2020-02-09'),
(6, 'anime', '', 'Dr. Stone', 'Dr. Stone', 'dr_stone.jpg', 2019, 12, 1, 'Sci-Fi, Adventure, Shounen', 'https://www.crunchyr', '', 'Em um instante, todos os humanos do mundo viraram pedra. Este acontecimento misterioso envolveu o estudante Taiju, depois de milhares de anos, ele e o seu amigo Senku despertam e decidem reconstruir a civilização do zero! E assim começa uma grande e única aventura de sobrevivência num mundo de ficção científica!', 'anime', 'https://www.youtube.com/watch?v=hNR9SDORGgs', '', 'https://www.youtube.com/watch?v=tF4faMbs5oQ', '1', '2019-12-24', '2020-02-09'),
(7, 'anime', '', 'Seraph of the End: Vampire Reign', 'Owari no Seraph', 'owari_no_seraph.jpg', 2015, 12, 2, 'Action, Military, Supernatural, Drama, Vampire, Shounen', '(+ou-) 24 minutos', '', 'Um dia, um vírus misterioso apareceu na Terra, que matou todos os humanos infectados com idade superior a 13 anos. Ao mesmo tempo, os vampiros surgiram a partir de trevas do mundo e da humanidade escravizada. Hyakuya Yuuichirou, um jovem rapaz, que, juntamente com o resto das crianças de seu orfanato, são tratados como gado pelos vampiros. Mesmo em cativeiro, Yuuichirou sonha grande. Ele sonha em matar vampiros. Ele sonha em matar todos eles.', 'https://www.google.com/search?ei=xWc-Xe_VDLSW0Aa65bNw&q=Owari+no+animes+online&oq=Owari+no+animes+online&gs_l=psy-ab.3..0i22i30l7.1802.3772..4708...0.0..0.418.3252.0j5j5j1j2......0....1..g', 'https://www.youtube.com/watch?v=axPvrp9I2Ag', '', 'https://www.youtube.com/watch?v=MxoJvOE7hcU', '1', '2019-12-24', '2020-02-09'),
(8, 'anime', '', 'Nejimaki Seirei Senki: Tenkyou no Alderamin', 'Alderamin on the Sky', 'alderamin_on_the_sky.jpg', 2016, 13, 1, 'Action, Adventure, Fantasy, Military', '(+ou-) 24 minutos', '', 'Uma guerra entre a República de Kioka e seu vizinho, o Império Katjvarna. Nessa região, devido a certas circunstâncias, havia um jovem se preparando a contragosto para o exame de Oficial Militar de Alta Classe. Seu nome, Ikta. Ele odeia a guerra, é preguiçoso e gosta de mulheres. Ninguém previu que o gentil Ikta se tornaria um soldado referido até como um grande comandante. Ele que sobreviveu a um mundo envolto em guerra com seu gênio superior, Ikta. As cortinas se abrem, ilustrando sua vida dinâmica, dramática e sua esplêndida e fantasiosa história militar', 'https://www.google.com/search?q=Nejimaki+Seirei+Senki+-+Tenkyou+no+Alderamin+Animes+online&spell=1&sa=X&ved=0ahUKEwimxbTStufjAhVpDrkGHdlEDngQBQgtKAA&biw=1366&bih=635', 'https://www.youtube.com/watch?v=7nSJAXOnJXQ', '', 'https://www.youtube.com/watch?v=kOG6Fd_xyxg', '1', '2019-12-24', '2020-02-09'),
(9, 'anime', '', 'Date A Live', 'Date A Live', 'date_a_live.jpg', 2013, 12, 1, 'Kadokawa Shoten, AT-X, Nippon Columbia, Fujimi Shobo', '(+ou-) 24 minutos', '', 'Itsuka Shido é um garoto do ensino médio. No último dia das férias de primavera, uma explosão destrói a cidade e uma menina de armadura aparece na frente dele. Shido irmã-de-lei, Kotori, diz- lhe que a menina é chamada de “Criatura desastroso especial designado: Spirit”, o que causa um terremoto de tempo-espaço. Kotori revelou que ela é o comandante da Ratatosk organização anti- espírito e ordena-lhe para ir a um encontro com a garota espírito. Kotori diz: “Eu não lhe peço para vencer o espírito. Deixa-la cair no amor com você e salvar o mundo.” ', 'https://www.google.com/search?ei=elJGXYzaN8OV0AadooiwCg&q=Date+a+live+animes+online&oq=Date+a+live+animes+online&gs_l=psy-ab.3...302.2505..4978...0.0..0.317.2814.0j8j5j1......0....1..gws-w', 'https://www.youtube.com/watch?v=RoMoUMIMXZ0', '', 'https://www.youtube.com/watch?v=6GW0wXMt2CQ', '1', '2019-12-24', '2020-02-09'),
(10, 'anime', '', 'Rakudai Kishi no Cavalry', 'Rakudai kishi', 'rakudai_kishi.jpg', 2013, 12, 1, 'Action, Romance, Ecchi, Fantasy, School', '(+ou-) 24 minutos', '', 'Existem poucos seres humanos neste mundo com a capacidade de manipular suas almas para formar armas poderosas. Apelidado & quot; Blazers & quot; essas pessoas estudam e treinam na prestigiada Academia Hagun para se tornarem Cavaleiros-Mago; entre os estudantes é o chamado fracasso Ikki Kurogane, o único Blazer F-rated. No entanto, quando a pior aluna da academia vê Stella Vermillion, uma blazer com classificação A, que também é uma princesa, nua, ela desafia-o para um duelo com apostas terríveis - o perdedor se torna escravo do vencedor. Não há nenhuma maneira possível que Stella possa perder, certo?      Rakudai Kishi no Cavalry segue a história de Ikki enquanto tenta provar sua força para um mundo que acredita que ele é o mais fraco, ganhando novos amigos, sabedoria e experiência.', 'https://www.google.com/search?ei=VYVZXeeWAsHC5OUPh-OiqAY&q=rakudai+kishi+animes+online&oq=rakudai+kishi+animes+online&gs_l=psy-ab.3..35i39.12489.12489..12965...0.0..0.195.195.0j1......0...', 'https://www.youtube.com/watch?v=iI4wKBI-bIg', '', 'https://www.youtube.com/watch?v=07sg564pM9U', '1', '2019-12-24', '2020-02-10'),
(11, 'anime', '', 'Date A Live II', 'Date A Live II', 'date_a_live_II.jpg', 2014, 10, 3, 'Comedy, Harem, Mecha, Romance, School, Sci-Fi', '(+ou-) 24 minutos', '', 'Segunda Temporada. tsuka Shido é um estudante colegial. No último dia das férias de primavera, uma explosão destrói a cidade e uma garota de armadura aparece na frente dele. A irmã por consideração de Shido, Kotori, diz pra ele que a garota é algo chamado \"Criatura Especial dos Desastres: Espírito\", que causa um terremoto espaço-temporal. Kotori revela a ele que ela é a comandante da organização antiespírito Ratatosk e ordena que ele namore com uma garota-espírito. Kotori diz, \"Não estou pedindo para derrotá-la. Só pra fazer com que ela apaixone-se por você e salve o mundo\".', 'https://www.google.com/search?biw=1366&bih=586&ei=n1VOXf3tBoHX5OUP-uerkAc&q=Date+a+live+II+animes+online&oq=Date+a+live+II+animes+online&gs_l=psy-ab.3..0i22i30l3.2419.4714..5030...', 'https://www.youtube.com/watch?v=RoMoUMIMXZ0', '', 'https://www.youtube.com/watch?v=OxvlqOUUbAo', '2', '2019-12-24', '2020-02-09'),
(12, 'anime', '', 'Citrus', 'Citrus', 'citrus.jpg', 2018, 12, 1, 'Drama, Romance, School, Shoujo Ai, Yuri', '(+ou-) 24 minutos', '', 'Quando a mãe de Yuzu, uma gyaru colegial que nunca se apaixonou, resolve se casar novamente, ela é transferida para um colégio feminino. Yuzu fica mais que chateada de não poder encontrar um namorado lá. Até que, no primeiro dia de aula, ela conhece Mei, a belíssima morena que comanda o conselho de classe, nas piores circunstâncias possíveis. E para piorar, ela descobre também que Mei é sua meia-irmã, e que ambas viverão sob o mesmo teto! E assim começa o caso de amor entre duas colegiais, que apesar de suas personalidades totalmente opostas, não conseguem resistir à atração que sentem uma pela outra.', 'https://www.google.com/search?ei=NMdhXbGaMqDW5OUPrKGO-A0&q=citrus+animes+online&oq=citrus+animes+online&gs_l=psy-ab.3...24248.26853..27890...0.2..0.179.1082.0j8......0....1..gws-wiz.......', 'https://www.youtube.com/watch?v=b6B_9rr3wxs', '', 'https://www.youtube.com/watch?v=zbIuDJchKEc', '1', '2019-12-24', '2020-02-09'),
(13, 'anime', '', 'Roaru Kagaku no Railgun', 'Roaru Kagaku', 'toaru_kagaku_no_railgun.jpg', 2010, 24, 1, 'Action, Sci-Fi, Super Power', '(+ou-) 24 minutos', '', 'Afastando-se do enredo de \"Index\", \"Toaru Kagaku no Railgun\" se concentra mais na Cidade Acadêmica e a terceira dos sete espers Níveis 5 chamada Misaka Mikoto. A Certain Scientific Railgun Characters.jpg Vários personagens do anime Toaru Kagaku no Railgun. Misaka Mikoto, apesar de ser parte dos espers mais poderosos da Cidade Acadêmica, também possui um lado mais descontraído de sua vida. Ela tem que defender-se de constantes ataques de \"amor\" da sua dedicada amiga e colega de quarto Shirai Kuroko, além de precisar manter uma imagem perfeita como a Ás de Tokiwadai. No entanto, com vários problemas que surgem na Cidade Acadêmica - tanto visível e fora da vista de todos - ela se move como salvadora invisível da Cidade Acadêmica, usando seus poderes para salvar as pessoas, entes queridos e mesmo desconhecidos', 'https://www.google.com/search?q=Toaru+Kagaku+no+Railgun+animes+online&biw=1366&bih=586&source=lnms&sa=X&ved=0ahUKEwiRsber7pzkAhUYFLkGHU7yA2EQ_AUIDCgA', 'https://www.youtube.com/watch?v=iJHASLCXA-w', '', 'https://www.youtube.com/watch?v=iZ2j45PHlHs', '1', '2019-12-24', '2020-02-10'),
(14, 'filme', 'anime', 'Fate/kaleid liner Prismaâ˜†Illya Movie: Sekka no Chikai', 'Fate/kaleid', 'fate_kaleid-capa.jpg', 2017, 0, 0, 'AÃ§Ã£o, Fantasia, Magia', '1h e 30m', '14', 'A destruiÃ§Ã£o do mundo progride. A Ãºnica coisa que pode para-la Ã© o sacrifÃ­cio de Miyu. Quando Ainsworth pergunta a Illya o que ela irÃ¡ salvar entre o mundo e Miyu, ela escolhe a resposta simples e egoÃ­sta, â€œambosâ€. Em um refÃºgio, todos descansam na casa que Miyu e Shirou cuidaram. Quando eles se reÃºnem em um cÃ­rculo, Shirou conta a eles sobre si mesmo e Miyu. Ela era a Filha de Deus que concederia todos e quaisquer desejos. Shirou levou a garota que nÃ£o tinha mais ninguÃ©m para a casa que ele tinha compartilhado com Kiritsugu. Foram cinco anos desde entÃ£o, e eles viveram pacificamente como irmÃ£os. Mas essa pacÃ­fica vida cotidiana foi agora quebrada. Eles vÃ£o levÃ¡-la de volta, mas antes disso, Julian faz sua apariÃ§Ã£o, ainda procurando em Miyu o milagre que ele precisa.', 'https://www.myotakulist.com/anime-info/fate-kaleid-liner-prisma-illya-movie-sekka-no-chikai', '', 'https://www.youtube.com/watch?v=yearbVtszKA', NULL, NULL, '2019-12-24', NULL),
(15, 'filme', 'filme', 'Pacific Rim', 'CÃ­rculo de Fogo', 'circulo_de_fogo.jpg', 2013, NULL, NULL, 'AÃ§Ã£o/FicÃ§Ã£o cientÃ­fica', '2h ev12m', '16', 'Pacific Rim|Quando vÃ¡rias criaturas monstruosas, os Kaiju, comeÃ§am a emergir do mar, tem inÃ­cio uma batalha entre estes seres e os humanos. Para combatÃª-los, a humanidade desenvolve uma sÃ©rie de robÃ´s gigantescos, os Jaegers, cada um controlado por duas pessoas por meio de uma conexÃ£o neural. Entretanto, mesmo os Jaegers se mostram insuficientes para derrotar os Kaiju. Diante deste cenÃ¡rio, a Ãºltima esperanÃ§a Ã© um velho robÃ´, que passa a ser comandado por um antigo piloto e uma pessoa em treinamento.', 'https://www.google.com/search?q=circulo+de+fogo&oq=circulo+de+fogo&aqs=chrome..69i57j0l5.4102j0j7&sourceid=chrome&ie=UTF-8', NULL, 'https://www.youtube.com/watch?v=KZnv9QUQDSM', NULL, NULL, '2019-12-24', NULL),
(16, 'filme', 'anime', 'Hello World', 'Hello World', 'hello_world.jpg', 2019, NULL, NULL, 'Sci-Fi, Animation', 'Desconheci', 'L', 'A histÃ³ria do filme se passa no ano de 2027, em Kyoto. Naomi Katagaki, um estudante comum, encontra um homem que diz ser ele 10 anos no futuro, e que estÃ¡ ali para ajudÃ¡-lo a salvar a garota pela qual irÃ¡ se apaixonar em 3 meses. Em meio a essa estranha situaÃ§Ã£o, o aparente fim do mundo surge para deixar as coisas ainda mais complicadas.( Ainda nÃ£o foi lanÃ§ado, por isso nÃ£o hÃ¡ um link para o filme. )', '#', NULL, 'https://www.youtube.com/watch?v=shoWFRnNoWw', NULL, NULL, '2019-12-24', NULL),
(17, 'serie', '', 'Love O2O', 'Love O2O', 'love_020.jpg', 2016, 11, 1, '', '(+ou-) 50 min', '10', 'Ã‰ um drama cheio de romance, fofinho e adorÃ¡vel. A temÃ¡tica me interessou bastante jÃ¡ que o drama trata de um casal que se conhece atravÃ©s de um jogo online (RPG). E pra ficar mais interessante ainda, o plot do romance Ã© bem real, sabe? NÃ£o tem aquelas situaÃ§Ãµes dramÃ¡ticas, tristes e as reviravoltas que estamos acostumados nos doramas, posso dizer que Ã© um romance simples, normal e lindo.', 'https://www.netflix.com/title/81005091', '', 'https://www.youtube.com/watch?v=tiiN4rDwa8g', '', '1', '2019-12-24', NULL),
(38, 'anime', '', 'Wotaku ni Koi wa Muzukashii', 'WotaKoi ', 'wotakoi.jpg', 2018, 11, 1, 'Comedy, Romance, Slice of Life', '(+ou-) 24 minutos', '', 'A série foca em quatro programadores de uma empresa, que acabam formando dois casais. São todos nerds/otakus, cada um com um vício diferente, de mangás a jogos.', 'https://www.google.com/search?q=WotaKoi+animes+onlines&oq=WotaKoi+animes+onlines&aqs=chrome..69i57j35i39j0l4.3372j0j7&sourceid=chrome&ie=UTF-8', 'https://www.youtube.com/watch?v=2MW0LP0iy0c', '', 'https://www.youtube.com/watch?v=oZCBpYTP1tE', '1', '2019-12-24', '2020-02-10'),
(40, 'anime', '', 'Sword Art Online: Alicization', 'S.A.O. Alicization', 'sword_art_online_alicization.jpg', 2019, 24, 4, 'Action, Game, Adventure, Romance, Fantasy', '(+ou-) 24 minutos', '', 'Onde… estou eu? Quando deu por si, Kirito havia entrado de cabeça em um épico mundo virtual cheio de fantasia. Com apenas vagas memórias do que havia acontecido antes de logar no jogo, ele começa a andar a esmo em busca de pistas. Sob uma enorme árvore negra, ele encontra um garoto. ‘Meu nome é Eugeo. Muito prazer, Kirito.’ Apesar de aparentar ser um morador do mundo virtual – um NPC – o garoto demonstra as mesmas emoções de um ser humano. Kirito e Eugeo viram amigos, e saem em busca de uma maneira de sair do mundo. É então que emerge uma certa memória, entranhada em seu ser. Ele lembra de sua infância, e de correr pelas montanhas com Eugeo… Uma lembrança que ele nunca poderia ter tido. E nessa lembrança, ele vê mais alguém: uma jovem loira. Ela se chama Alice, e este é um nome que ele nunca deve esquecer.', 'https://www.google.com/search?sxsrf=ACYBGNS_BaJ2CndrpJ0kGdAVH6x1axmc9A%3A1573359582526&ei=3o_HXfzpH9W05OUP66mSmAU&q=SAO+alicization+animes+online&oq=SAO+alicization+animes+online&gs_l=psy-ab.3..35i39.1684.3918..4251...0.2..0.264.1922.1j11j2......0....1..g', 'https://www.youtube.com/watch?v=kbaxS6C1gSk', '', 'https://www.youtube.com/watch?v=kBUkTavYOjY', '3', '2019-12-24', '2020-02-10'),
(41, 'anime', '', 'Sword Art Online: Alicization - War of Underworld', 'S.A.O. War of Underwolrd', 'sword_art_online_alicization_war_of_underworld.jpg', 2019, 12, 4, 'Action, Game, Adventure, Romance, Fantasy', '(+ou-) 24 minutos', '', 'Segunda parte de Sword Art Online: Alicization', 'https://www.google.com/search?sxsrf=ACYBGNQL1v-LaUYFH7zZcjo4Q9FizscKDw%3A1577201621294&ei=1S8CXurGEeHZ5OUPveOX2Ac&q=sword+art+online+war+of+underworld+animes+online&oq=sword+art+online+war+of+underworld+animes+online&gs_l=psy-ab.3...2109.4078..5408...0.0.', 'https://www.youtube.com/watch?v=F91Zuwxx-vM', '', 'https://www.youtube.com/watch?v=tlZ20pwDmCE', '4', '2019-12-24', '2020-02-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendentes`
--

CREATE TABLE `pendentes` (
  `pendenteId` int(11) NOT NULL,
  `FK_midiaId` int(11) DEFAULT NULL,
  `FK_usuarioId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pendentes`
--

INSERT INTO `pendentes` (`pendenteId`, `FK_midiaId`, `FK_usuarioId`) VALUES
(1039, 16, 1),
(1046, 13, 1),
(1047, 38, 1),
(1050, 17, 1),
(1051, 6, 1),
(1067, 11, 1),
(1069, 4, 1),
(1070, 14, 1),
(1072, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioId` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarioId`, `usuario`, `senha`) VALUES
(1, 'Hiragy7', '3cf94774da6b6a9ab9db2b8edb1da4f8'),
(36, 'eduardo1', '202cb962ac59075b964b07152d234b70'),
(38, 'eduardo2', '202cb962ac59075b964b07152d234b70'),
(39, 'eduardo3', '202cb962ac59075b964b07152d234b70'),
(40, 'eduardo4', '202cb962ac59075b964b07152d234b70'),
(41, 'eduardo5', '202cb962ac59075b964b07152d234b70'),
(42, 'aaa', '202cb962ac59075b964b07152d234b70'),
(43, 'sss', '202cb962ac59075b964b07152d234b70'),
(44, 'qqq', '202cb962ac59075b964b07152d234b70'),
(45, 'nalice', '04f8673e786019ee6afbb318e370c67b'),
(46, 'fff', '343d9040a671c45832ee5381860e2996'),
(47, 'eduardo', '202cb962ac59075b964b07152d234b70'),
(48, 'black', '81dc9bdb52d04dc20036dbd8313ed055'),
(49, 'kkk', '43ec3e5dee6e706af7766fffea512721'),
(50, 'uuu', 'c70fd4260c9eb90bc0ba9d047c068eb8'),
(51, 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa'),
(52, 'rrr', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`favoritoId`),
  ADD KEY `FK_midiaId` (`FK_midiaId`),
  ADD KEY `FK_usuarioId` (`FK_usuarioId`);

--
-- Índices para tabela `midia`
--
ALTER TABLE `midia`
  ADD PRIMARY KEY (`midiaId`);

--
-- Índices para tabela `pendentes`
--
ALTER TABLE `pendentes`
  ADD PRIMARY KEY (`pendenteId`),
  ADD KEY `FK_midiaId` (`FK_midiaId`),
  ADD KEY `FK_usuarioId` (`FK_usuarioId`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioId`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `favoritoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `midia`
--
ALTER TABLE `midia`
  MODIFY `midiaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `pendentes`
--
ALTER TABLE `pendentes`
  MODIFY `pendenteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1074;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`FK_midiaId`) REFERENCES `midia` (`midiaId`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`FK_usuarioId`) REFERENCES `usuarios` (`usuarioId`);

--
-- Limitadores para a tabela `pendentes`
--
ALTER TABLE `pendentes`
  ADD CONSTRAINT `pendentes_ibfk_1` FOREIGN KEY (`FK_midiaId`) REFERENCES `midia` (`midiaId`),
  ADD CONSTRAINT `pendentes_ibfk_2` FOREIGN KEY (`FK_usuarioId`) REFERENCES `usuarios` (`usuarioId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
