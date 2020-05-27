<div id="Product-Section">
<span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Bread') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
    <span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Cakes') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
    <span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Pastries') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
    <span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Pie') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
    <span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Pizza') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
    <span class="divider"></span>
    <div class="products">
        <?php
        foreach ($Products as $Product) {
            if ($Product['Category'] === 'Pretzels') {
                echo '<div class="Product">
                <h3>' . $Product['Name'] . '</h3>
                <div class="Product-img">
                    <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
                </div>';
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
                echo '<p class="description">' . $Product['Description'] . '</p>
                <h4>£' . $Product['Price'] . '</h4>
            </div>';
            }
        }
        ?>
    </div>
</div>