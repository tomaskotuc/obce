<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url("/"); ?>">Úvod</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor04">
                <ul class="navbar-nav me-auto">
                    
                    
                    <?php
                     foreach($okresy as $okres) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='".base_url("okres/".$okres->kod)."/perPage/10'>".$okres->nazev."</a>";
                        echo "</li>";
                        
                    }?>
                </ul>
            </div>
        </div>
    </nav>