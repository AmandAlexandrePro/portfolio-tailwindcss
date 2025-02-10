<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<div class="flex flex-col gap-12">
    <a href="#projets"><h1 class="text-3xl text-blue-400 font-bold text-center cursor-pointer hover:bg-gradient-to-r from-blue-400 to-purple-500 hover:bg-clip-text hover:text-transparent transition-all ease-in-out duration-200 pt-15 md:pt-5">Mes Projets</h1></a>
    <div class="inline-grid grid-cols-1 md:grid-cols-2 gap-12">
        <?php foreach (
            [
                [
                    "titre" => "Chef d’Œuvre Baccalauréat (C.O.B.)",
                    "image" => "/COB.jpg",
                    "lien" => "https://github.com/AmandAlexandrePro/COB",
                    "description" => "Jeu-Vidéo sur le Thème de l’Écologie sous forme de « Quiz »",
                    "tags" => [
                        "video-game",
                        "forest",
                        "ecology",
                        "cod-waw",
                        "custom-maps"
                    ]
                ],
                [
                    "titre" => "Light Bridge",
                    "image" => "/Light-Bridge.png",
                    "lien" => "https://github.com/AmandAlexandrePro/Light-Bridge",
                    "description" => "Contrôle d’un Pont Lumière à l’aide d’une Console DMX en Temps Réel avec Configuration de Scènes Personnalisables",
                    "tags" => [
                        "dmx",
                        "pont-lumiere",
                        "javascript",
                        "playcanvas"
                    ]
                ]
            ] as $projet
        ) : ?>
            <div class="relative rounded-lg before:absolute before:inset-0 before:-z-10 before:blur-lg before:bg-gradient-to-r before:from-indigo-500 before:to-purple-600 before:transition-all before:ease-in-out before:duration-200 before:opacity-0 hover:before:opacity-100">
                <div class="relative bg-gray-700 rounded-2xl max-w-md text-gray-300 flex-grow h-full">
                    <a class="w-full h-full block" href="<?= $projet["lien"] ?>" target="_blank">
                        <div class="flex flex-col">
                            <img class="rounded-t-2xl h-50" src="<?= $projet["image"] ?>" alt="Miniature de <?= $projet["titre"] ?>">
                            <div class="flex flex-col p-6 gap-3">
                                <h2 class="text-blue-400 text-xl font-bold"><?= $projet["titre"] ?></h2>
                                <p><?= $projet["description"] ?></p>
                                <div class="flex flex-row flex-wrap gap-3 justify-center">
                                    <?php foreach ($projet["tags"] as $tag) : ?>
                                        <div class="flex flex-row items-center rounded-full px-5 py-1 w-fit bg-blue-400/20 text-blue-400">
                                            <p><?= $tag ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>