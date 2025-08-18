<?php

/** 
 * Affichage des statistiques pour chaque article dans la partie admin.
 * les stat afficher sont le nombre de vues et le nombre de commentaires.
 */

?>

<h2>Statistiques des articles</h2>

<table>
    <thead class="table-admin">
        <tr>
            <th>
                <span class="th-content">
                    <span class="titre-colonne">Titre</span>
                    <span class="tri-colonne">
                        <a href="index.php?action=showMoreInformations&sort=title&order=asc">▲</a>
                        <a href="index.php?action=showMoreInformations&sort=title&order=desc">▼</a>
                    </span>
                </span>
            </th>
            <th><span class="th-content">
                    <span class="titre-colonne">Vues
                    </span>
                    <span class="tri-colonne">
                        <a href="index.php?action=showMoreInformations&sort=views&order=asc">▲</a>
                        <a href="index.php?action=showMoreInformations&sort=views&order=desc">▼</a>
                    </span>
                </span>
            </th>
            <th><span class="th-content">
                    <span class="titre-colonne">Commentaires
                    </span>
                    <span class="tri-colonne">
                        <a href="index.php?action=showMoreInformations&sort=nb_comments&order=asc">▲</a>
                        <a href="index.php?action=showMoreInformations&sort=nb_comments&order=desc">▼</a>
                    </span>
                </span>
            </th>
            <th><span class="th-content">
                    <span class="titre-colonne">Date de publication
                    </span>
                    <span class="tri-colonne">
                        <a href="index.php?action=showMoreInformations&sort=date_creation&order=asc">▲</a>
                        <a href="index.php?action=showMoreInformations&sort=date_creation&order=desc">▼</a>
                    </span>
                </span>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articlesStats as $article): ?>
            <tr class="table-row">
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= htmlspecialchars($article['views']) ?></td>
                <td><?= htmlspecialchars($article['nb_comments']) ?></td>
                <td> <?php
                        $date = new DateTime($article['date_creation']);
                        echo $date->format('d/m/Y à H:i');
                        ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>