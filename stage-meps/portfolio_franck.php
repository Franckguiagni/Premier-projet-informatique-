<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Jean Dupont</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            overflow: hidden;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 15px 0;
            display: block;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .profile {
            text-align: center;
            margin: 20px 0;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .profile h1 {
            margin: 10px 0 0;
        }
        .profile p {
            margin: 10px 0;
            font-size: 18px;
        }
        .section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            margin: 0 0 10px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery img {
            width: calc(33% - 20px);
            border-radius: 8px;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .skills .skill {
            width: 45%;
            margin: 10px 0;
        }
        .testimonials {
            text-align: center;
        }
        .testimonials p {
            font-style: italic;
        }
        .testimonials .author {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header>
    <h1>Franck Eric Junior Guiagni - Portfolio</h1>
</header>

<nav>
    <ul>
        <li><a href="#about">À propos</a></li>
        <li><a href="#projects">Projets</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#testimonials">Témoignages</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<div class="container">

    <section id="about" class="section profile">
        <img src="https://via.placeholder.com/150" alt="Photo de Profil">
        <h1>Mr Jef</h1>
        <p>Développeur Web & Designer Graphique</p>
        <p>Email: franckguiagni777@gmail.com | Téléphone: +225 07 77 65 71 34</p>
        <p>Je suis passionné par la création de sites web esthétiques et fonctionnels, 
        ainsi que par la conception graphique innovante. Avec plus de 2 ans d'expérience dans le domaine, 
        j'ai travaillé sur une variété de projets allant des applications web aux identités visuelles complètes.
         Mon objectif est de toujours offrir des solutions créatives et efficaces qui répondent aux besoins spécifiques de mes clients.
        </p>
    </section>

    <section id="projects" class="section">
        <h2>Projets</h2>
        <div class="gallery">
            <img src="https://via.placeholder.com/300" alt="Projet 1">
            <img src="https://via.placeholder.com/300" alt="Projet 2">
            <img src="https://via.placeholder.com/300" alt="Projet 3">
        </div>
        <p>Voici quelques-uns de mes projets récents :</p>
        <ul>
            <li><strong>Site Web de E-commerce:</strong> Développement complet d'une boutique en ligne utilisant html5 et css3 pour le frontend et php pour le backend. <a href="#">Voir le projet</a></li>
            <li><strong>Application Mobile:</strong> Conception et développement d'une application mobile de suivi d'activité physique utilisant Flutter. <a href="#">Voir le projet</a></li>
            <li><strong>Portfolio Personnel:</strong> Création de ce portfolio pour présenter mes compétences et réalisations. <a href="#">Voir le projet</a></li>
            <li><strong>Site de Blog:</strong> Développement d'une plateforme de blog avec des fonctionnalités de gestion de contenu et d'interaction utilisateur. <a href="#">Voir le projet</a></li>
            <li><strong>Identité Visuelle:</strong> Conception d'une identité visuelle complète pour une startup tech, y compris le logo, les cartes de visite et les supports marketing. <a href="#">Voir le projet</a></li>
        </ul>
    </section>

    <section id="skills" class="section">
        <h2>Compétences</h2>
        <div class="skills">
            <div class="skill">
                <h3>Développement Web</h3>
                <p>Maîtrise des langages HTML, CSS et JavaScript, ainsi que des frameworks tels que React et Vue.js. Expérience avec les technologies backend comme Node.js et Express.</p>
                <ul>
                    <li>HTML5, CSS3, JavaScript PHP</li>
                    <li>React, Vue.js, Angular</li>
                    <li>Responsive Design et Accessibilité</li>
                </ul>
            </div>
            <div class="skill">
                <h3>Design Graphique</h3>
                <p>Expertise dans l'utilisation des outils Adobe Photoshop et Illustrator pour la création de graphismes originaux. Familiarité avec les outils de conception UX/UI tels que Figma et Adobe XD.</p>
                <ul>
                    <li>Adobe Photoshop, Illustrator</li>
                    <li>Figma, Adobe XD</li>
                    <li>Prototypage et Wireframing</li>
                    <li>Théorie des couleurs et typographie</li>
                    <li>Création de logos et identités visuelles</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section testimonials">
        <h2>Témoignages</h2>
        <p>"Jean est un développeur exceptionnel avec un œil pour le design. Son travail sur notre projet a dépassé nos attentes. Nous recommandons fortement ses services."</p>
        <p class="author">- Client Satisfait</p>
        <p>"La collaboration avec Jean a été très fructueuse. Ses compétences techniques et son sens esthétique ont grandement contribué au succès de notre projet. Il a su comprendre nos besoins et les transformer en solutions concrètes."</p>
        <p class="author">- Partenaire de Projet</p>
        <p>"Jean est un professionnel talentueux et dévoué. Sa capacité à allier développement et design est un atout majeur pour notre entreprise."</p>
        <p class="author">- Collègue de Travail</p>
    </section>

    <section id="contact" class="section">
        <h2>Contact</h2>
        <p>Pour toute demande de collaboration ou de projet, n'hésitez pas à me contacter :</p>
        <p>Email: <a href="mailto:jean.dupont@example.com">jean.dupont@example.com</a></p>
        <p>Téléphone: +33 6 12 34 56 78</p>
        <p>Ou utilisez le formulaire de contact ci-dessous :</p>
        <form action="submit.php" method="post">
            <label for="name">Nom:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </section>

</div>

<div class="footer">
    &copy; 2024 Jean Dupont. Tous droits réservés. | <a href="#about">Retour en haut</a>
</div>

</body>
</html>
