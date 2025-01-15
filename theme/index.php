<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tatianavieirainteriores
 */

get_header();
?>

<section id="primary">
	<main id="main">
		<section id="home" className="flex">
			<!-- <Hero /> -->
		</section>
		<section id="services" className="flex">
			<!-- <ServicesCTA /> -->
		</section>
		<section id="intro" className="flex">
			<!-- <Intro /> -->
		</section>
		<section id="highlights"
			className="flex flex-col sm:flex-row w-full sm:h-[600px] bg-antique-white xl:px-[15vw] 2xl:px-[20vw]">
			<div className="flex flex-1 xs:order-2 sm:w-1/2">
				<!-- <HomeCTA
			title="Destaques"
			highlight="Portfolio"
			description={
			  <>
				Explora o nosso portfolio de projetos e inspira-te com inúmeras
				possibilidades de design de interiores e exteriores. Navega por
				uma variedade de estilos, desde o minimalismo elegante até à
				extravagância criativa.
				<br />
				Encontra a inspiração que precisas para o teu próximo projeto e
				deixa-nos dar vida às tuas ideias.
			  </>
			}
			button={{
			  text: "Ver Portfolio",
			  url: "/portfolio",
			}}
		  /> -->
			</div>
			<div className="flex flex-1 xs:order-1 sm:w-1/2">
				<!-- <Image
			quality={100}
			alt="imagem dos destaques"
			src="/highlight.png"
			width={1920}
			height={1080}
			sizes=" (max-width: 768px) 200px, (max-width: 1200px) 500px, 800px"
			className="object-cover h-full min-h-[350px] max-h-[500px] sm:max-h-none"
		  /> -->
			</div>
		</section>
		<section id="contactos" className="flex flex-col gap-4 p-4 sm:px-16 xl:px-[15vw] 2xl:px-[20vw]">
			<?php get_template_part('template-parts/layout/section-title', 'content'); ?>
			<!-- <SectionTitle>Diga-nos o que precisa</SectionTitle>
		<ContactUsForm socials={false} /> -->
		</section>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
