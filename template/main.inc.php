<main>
       <!--  template content -->
       <figure>
            <img 
            src="./asset/cover.jpg" 
            alt="cover Batman" loading="lazy">
            <figcaption>
                <h2><ion-icon name="film-outline"></ion-icon> <?php print "Caracteristiques ".title ?></h2>
                <ul class="list-movie">
                    <li>Franchise: DC Comics</li>
                    <li>Acteurs: Christian Bale, Michael Caine, Liam Neeson, Katie Holmes, Gary</li>
                    <li>Réalisateur: Christopher Nolan</li>
                    <li>Langues des sous titres: fr, it, esp</li>
                    <li>Date de sortie cinéma: <?= $content["date"] ?></li>
                </ul>
                <details>
                    <summary> 
                        <?= $content["title"] ?>
                       
                    </summary>
                    <p>
                       <?= $content['content'] ?>

                       
                    </p>
                </details>
                
            </figcaption>
       </figure>

    </main>