<?php
/**
 * Ficheiro Front Page
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>
<section class="section-card mt-5" id="quem-somos">
	<style>
		.background-image {
			/* min-height: 560px; */
			background-color: rgb(0 0 0 / 50%);
			background-image: url(/wp-content/uploads/2022/03/3.webp);
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
		}
		.text-editor {
			color: #fff;
			font-family: "Poppins",Sans-serif;
			font-size: 24px;
			font-weight: 400;
			line-height: 1.3em;
		}
		.overlay{
			background-color: rgba(26,25,25,.5);
			/* opacity: .56; */
			transition: background .3s, border-radius .3s, opacity .3s;
		}
	</style>
	<div class="container-fluid background-image p-0">
		<div class="align-items-center d-flex justify-content-center justify-content-lg-start overlay p-2 p-lg-5">
			<div class="container m-4">
				<div class="row">
					<div class="col-12 col-lg-8 col-md-6 col-sm-6 text-center text-lg-start text-md-start">
						<span class="text-editor">
							A <b>IMFC Consulting</b> se propõe a trabalhar com sinergia para que propósitos pessoais e profissionais possam convergir, transformando resultado em bem social.
						</span>
					</div>
					<div class="col-12 col-lg-4 col-md-6 col-sm-6 p-lg-0">
						<div class="container d-flex justify-content-center p-0">			
							<a href="" class="btn btn-light fw-bold m-lg-4 m-5 m-md-5 rounded-0"><span>Conheça a IMFC</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>