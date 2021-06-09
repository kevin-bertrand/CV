<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-2 section-header">
                <h2>Contact</h2>
                <div class="brown-divider"></div>
            </div>
        </div>
    </div>

    <div id="row">
        <div class=" col-10 offset-1 col-md-8 offset-md-2">
            <form action="" method="post" role="form" id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">Prénom <span class="require-infos">*</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                        <p class="error-comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom <span class="require-infos">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                        <p class="error-comments"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Émail <span class="require-infos">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre émail" autocapitalize="false">
                        <p class="error-comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone">
                        <p class="error-comments"></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="message" class="form-label">Message <span class="require-infos">*</span></label>
                    <textarea name="message" id="message" placeholder="Votre message" class="form-control"></textarea>
                    <p class="error-comments"></p>
                </div>
                <div class="col-md-12">
                    <p class="require-infos">
                        <strong>* Ces informations sont requises</strong>
                    </p>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="submit-button" value="Envoyer">
                </div>
            </form>
            <div class='modal fade' id='sendSuccessModal' tabindex='-1' aria-labelledby='sendSuccessModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='sendSuccessModalLabel'>Envoi réussi!</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            Merci de m'avoir contacté 🙂
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
