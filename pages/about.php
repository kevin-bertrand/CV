<?php
function getAge() {
    $birthDate = '1997-10-23';
    $birthDate = date('Ymd', strtotime($birthDate));
    $diff = date('Ymd') - $birthDate;
    return substr($diff, 0, -4);
}
?>

<section id="presentation">
    <div class="container">
        <h1>Bienvenue !</h1>
        <p id="main-presentation">Je m'appelle Kevin Bertrand et je suis développeur d'applications iOS et ingénieur automaticien.</p>
        <p id="description-presentation">Je recherche actuellement un poste de développeur d'application iOS</p>

        <div class="row">
            <div class="col-3 offset-lg-2" id="presentation-picture">
                <img src="public/img/me.jpeg" alt="Kevin" class="rounded-circle">
            </div>
            <div class="col-9 col-lg-4 offset-lg-1" id="contact-presentation">
                <h6><a href="tel:+33778840190"><span class="bi bi-telephone-fill"></span> +33 7 78 84 01 90</a></h6>
                <h6><a href="mailto:kevin.bertrand@outlook.com"><i class="bi bi-envelope-open-fill"></i> kevin.bertrand@outlook.com</a></h6>
                <h6><a href="https://www.linkedin.com/in/kevin-bertrand" target="_blank"><i class="bi bi-linkedin"></i> /kevin-bertrand</a></h6>
                <h6><a href="https://github.com/kevin-bertrand" target="_blank"><i class="bi bi-github"></i>/kevin-bertrand</a></h6>
                <h6><i class="fas fa-car"></i>   Permis: B (novembre 2015)</h6>
                <h6><i class="fas fa-birthday-cake"></i>23 octobre 1997 (<?= getAge(); ?> ans)</h6>
            </div>
        </div>
    </div>
</section>