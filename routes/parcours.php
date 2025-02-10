<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<div class="flex flex-col gap-12 text-gray-300">
    <a href="#parcours"><h1 class="text-3xl text-blue-400 font-bold text-center cursor-pointer hover:bg-gradient-to-r from-blue-400 to-purple-500 hover:bg-clip-text hover:text-transparent transition-all ease-in-out duration-200 pt-8 md:pt-0">Mon Parcours</h1></a>
    <div class="inline-grid grid-cols-1 md:grid-cols-2 gap-10">
        <?php foreach (
            [
                [
                    "couleur" => "blue-400",
                    "couleurHover" => "blue-300",
                    "nom" => "BTS SIO SLAM",
                    "ficheParcours" => "https://www.francecompetences.fr/recherche/rncp/35340",
                    "dates" => [
                        "debut" => 2024,
                        "fin" => 2026
                    ],
                    "etablissement" => [
                        "type" => "Lycée Général",
                        "nom" => "Louis Pergaud",
                        "ville" => "Besançon, France",
                        "siteWebEtablissement" => "https://www.lyceepergaud.fr",
                        "siteWebVille" => "https://maps.app.goo.gl/gwv1K8YygBAzjHgV8"
                    ],
                    "parcours" => [
                        "label" => "Compétences développées",
                        "valeurs" => [
                            "Développement d'application web et mobiles",
                            "Cybersécurité et protection des données",
                            "Gestion de projets informatiques"
                        ]
                    ]
                ],
                [
                    "couleur" => "purple-400",
                    "couleurHover" => "purple-300",
                    "nom" => "BAC Pro SN ARED",
                    "ficheParcours" => "https://www.francecompetences.fr/recherche/rncp/26334",
                    "dates" => [
                        "debut" => 2022,
                        "fin" => 2024
                    ],
                    "etablissement" => [
                        "type" => "Lycée Professionnel",
                        "nom" => "Denis Diderot",
                        "ville" => "Bavilliers, France",
                        "siteWebEtablissement" => "https://lyc-ddiderot-bavilliers.eclat-bfc.fr",
                        "siteWebVille" => "https://maps.app.goo.gl/xryKf2Xk1LWjdiVY9"
                    ],
                    "parcours" => [
                        "label" => "Compétences développées",
                        "valeurs" => [
                            "Installation et Maintenance d'Équipements Numériques",
                            "Configuration et Dépannage de Réseau",
                            "Techniques Audiovisuelles et Multimédia"
                        ]
                    ]
                ],
                [
                    "couleur" => "blue-400",
                    "nom" => "Certifications",
                    "logo" => "fa-certificate",
                    "certifications" => [
                        [
                            "couleur" => "blue-400",
                            "couleurHover" => "blue-300",
                            "logo" => "fa-award",
                            "description" => "PIX - Score 317",
                            "lien" => "/AMAND Alexandre - PIX.pdf"
                        ],
                        [
                            "couleur" => "purple-400",
                            "couleurHover" => "purple-300",
                            "logo" => "fa-shield",
                            "description" => "SecNum Académie - ANSSI",
                            "lien" => "/AMAND Alexandre - SecNum Académie - ANSSI.pdf"
                        ],
                        [
                            "couleur" => "blue-400",
                            "couleurHover" => "blue-300",
                            "logo" => "fa-shield",
                            "description" => "Atelier RGPD - CNIL",
                            "lien" => "/AMAND Alexandre - Atelier RGPD - CNIL.pdf"
                        ]
                    ]
                ]
            ] as $parcours
        ) : ?>
            <?php $cert = (function (): bool {
                global $parcours;
                try {
                    return (isset($parcours["certifications"]) == true ? is_array($parcours["certifications"]) == true : false);
                } catch (Throwable $e) {
                    return false;
                }
            })() == true; ?>
            <div class="relative bg-gray-700 rounded-lg p-8 <?= ($cert == true ? "col-span-full" : "") ?>">
                <div class="absolute top-0 right-0 w-24 h-24 bg-<?= $parcours["couleur"] ?>/10 rounded-bl-full"></div>
                <?php if ($cert == true) : ?>
                    <div class="flex flex-row gap-6 mb-8 items-center">
                        <div class="rounded-lg p-4 h-fit w-fit bg-<?= $parcours["couleur"] ?>/20">
                            <i class="fa-solid <?= $parcours["logo"] ?> text-<?= $parcours["couleur"] ?> text-3xl"></i>
                        </div>
                        <h2 class="text-2xl text-<?= $parcours["couleur"] ?> font-bold"><?= $parcours["nom"] ?></h2>
                    </div>
                    <div class="flex flex-row flex-wrap gap-4">
                        <?php foreach ($parcours["certifications"] as $certification) : ?>
                            <a href="<?= $certification["lien"] ?>" target="_blank"><div class="flex flex-row items-center gap-3 rounded-full px-6 py-3 w-fit bg-<?= $certification["couleur"] ?>/20 text-<?= $certification["couleur"] ?> hover:text-<?= $certification["couleurHover"] ?> transition-all ease-in-out duration-200">
                                <i class="fa-solid <?= $certification["logo"] ?>"></i>
                                <h2><?= $certification["description"] ?></h2>
                            </div></a>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <div class="relative flex flex-row gap-6 mb-8">
                        <div class="rounded-lg p-4 h-fit w-fit bg-<?= $parcours["couleur"] ?>/20">
                            <i class="fa-solid fa-graduation-cap text-<?= $parcours["couleur"] ?> text-3xl"></i>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl text-<?= $parcours["couleur"] ?> font-bold"><a class="hover:text-<?= $parcours["couleurHover"] ?> transition-all ease-in-out duration-200" href="<?= $parcours["ficheParcours"] ?>" target="_blank"><?= $parcours["nom"] ?></a></h2>
                            <p><?= $parcours["dates"]["debut"] ?> - <?= $parcours["dates"]["fin"] ?></p>
                            <p><a class="text-<?= $parcours["couleur"] ?> hover:text-<?= $parcours["couleurHover"] ?> transition-all ease-in-out duration-200" href="<?= $parcours["etablissement"]["siteWebEtablissement"] ?>" target="_blank"><?= $parcours["etablissement"]["type"] ?> <?= $parcours["etablissement"]["nom"] ?></a> - <a class="text-<?= $parcours["couleur"] ?> hover:text-<?= $parcours["couleurHover"] ?> transition-all ease-in-out duration-200" href="<?= $parcours["etablissement"]["siteWebVille"] ?>" target="_blank"><?= $parcours["etablissement"]["ville"] ?></a></p>
                        </div>
                    </div>
                    <div dir="ltr">
                        <div class="border-s-<?= $parcours["couleur"] ?>/20 border-s-2 flex flex-col pl-8 gap-4">
                            <h4 class="text-xl text-<?= $parcours["couleur"] ?>"><?= $parcours["parcours"]["label"] ?></h4>
                            <?php foreach ($parcours["parcours"]["valeurs"] as $valeur) : ?>
                                <div class="flex flex-row items-center gap-4">
                                    <i class="fa-solid fa-circle text-<?= $parcours["couleur"] ?> text-xs"></i>
                                    <p><?= $valeur ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>