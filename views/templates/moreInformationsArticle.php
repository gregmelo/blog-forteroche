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
            <th>Titre</th>
            <th>Nombre de vues</th>
            <th>Nombre de commentaires</th>
            <th>Date de publication</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articlesStats as $article): ?>
        <tr class="table-row">
            <td><?= htmlspecialchars($article['title']) ?></td>
            <td><?= htmlspecialchars($article['views']) ?></td>
            <td><?= htmlspecialchars($article['nb_comments']) ?></td>
            <td><?= htmlspecialchars($article['date_creation']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>