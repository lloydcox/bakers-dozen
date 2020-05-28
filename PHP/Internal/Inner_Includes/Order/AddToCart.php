<div id="Shop">
    <?php
    foreach ($Products as $Product) {
        echo '<div class="shop-item">
    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
    <div class="info">
        <h3>' . $Product['Name'] . '</h3>';
        if (!is_null($Product['Flavor1'])) {
            echo '<p class="flavor">Notable Flavour/s: ' . $Product['Flavor1'];
            if (!is_null($Product['Flavor2'])) {
                echo ', ' . $Product['Flavor2'] . '</p>';
            } else {
                echo '</p>';
            }
        } else {
            echo '<div class="flavor"></div>';
        }
        echo '</div>
    <div class="quantity">
    <div class="value">
    <p class="'.$Product['id-name'].'-number"></p>
    </div>
    <input type="range" class="'.$Product['id-name'].'-ammount" name="ammount" min="0" max="30" value="0">
    </div>
</div>';
    }
    ?>
</div>