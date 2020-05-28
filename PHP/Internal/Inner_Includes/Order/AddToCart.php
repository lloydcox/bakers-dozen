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
    <div id="value">
    <p></p>
    </div>
    <input type="range" id="ammount" name="ammount" min="1" max="30">
    </div>
</div>';
    }
    ?>
</div>