<div id="Shop">
    <div class="shop-content">
        <div class="width">
            <span class="divider"></span>
        </div>
        <div class="bread-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Bread') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div class="cake-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Cakes') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div class="width">
            <span class="divider"></span>
        </div>
        <div class="pie-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Pie') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div class="pizza-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Pizza') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div class="width">
            <span class="divider"></span>
        </div>
        <div class="pretzel-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Pretzels') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div class="pastries-shop">
            <?php
            foreach ($Products as $Product) {
                if ($Product['Category'] === 'Pastries') {
                    echo '<div class="shop-item">
            <img src="' . $Product['Image_url'] . '" alt="' . $Product['Name'] . '">
            <div class="info">
                <h3 class="item">' . $Product['Name'] . '</h3>';
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
                    echo '<p class="' . $Product['id-name'] . '-cost">' . $Product['Price'] . '</p>
                </div>
            <div class="quantity">
            <div class="value">
            <p class="' . $Product['id-name'] . '-number"></p>
            </div>
            <input type="range" class="' . $Product['id-name'] . '-ammount" name="ammount" min="0" max="30" value="0">
            </div>
        </div>';
                }
            }
            ?>
        </div>
        <div id="cart">
            <h3></h3>
            <div id="list">
                <!-- cart content -->
            </div>
            <h3 id="total"></h3>
        </div>
    </div>
</div>