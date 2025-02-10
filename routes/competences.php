<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<div class="flex flex-col gap-12">
    <a href="#competences"><h1 class="text-3xl text-blue-400 font-bold text-center cursor-pointer hover:bg-gradient-to-r from-blue-400 to-purple-500 hover:bg-clip-text hover:text-transparent transition-all ease-in-out duration-200 pt-15 md:pt-0">Mes Compétences</h1></a>
    <div class="inline-grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach (
            [
                [
                    "titre" => "Développement",
                    "logo" => "fa-code",
                    "competences" => [
                        "HTML / CSS / TailWindCSS",
                        "JavaScript / NodeJS / DenoJS",
                        "PHP",
                        "GSC",
                        "SQL / DenoKV"
                    ]
                ],
                [
                    "titre" => "Cybersécurité",
                    "logo" => "fa-shield",
                    "competences" => [
                        "Sécurité des réseaux",
                        "Protection des données",
                        "Veille sécurité"
                    ]
                ],
                [
                    "titre" => "Outils",
                    "logo" => "fa-screwdriver-wrench",
                    "competences" => [
                        "Git",
                        "Visual Studio Code",
                        "MySQL",
                        "Linux"
                    ]
                ]
            ] as $competence
        ) : ?>
            <div class="relative bg-gray-700 rounded-lg p-8">
                <div class="flex flex-col gap-6">
                    <div>
                        <i class="fa-solid <?= $competence["logo"] ?> text-blue-400 text-4xl"></i>
                    </div>
                    <h2 class="text-blue-400 text-xl font-bold"><?= $competence["titre"] ?></h2>
                    <div class="flex flex-col gap-4 text-gray-300">
                        <?php foreach ($competence["competences"] as $competence) : ?>
                            <div class="flex flex-row items-center gap-4">
                                <i class="fa-solid fa-circle text-blue-400 text-xs"></i>
                                <p><?= $competence ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>