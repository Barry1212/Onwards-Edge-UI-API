
<div class="container">
    <h1>Top 5 Films</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Realisateur</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $y = new filme;
            $y->top();
            ?>
        </tbody>
    </table>
</div>