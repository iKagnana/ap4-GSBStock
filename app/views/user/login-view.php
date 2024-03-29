<?php require_once ("../app/views/header-view.php");
?>
<div class="page-container">
    <div class="flex-row full-width">
        <?php echo "<img class='cover' src='$host/assets/GSBStock.png' alt='image couverture'>"; ?>
        <div class="full-width form-center-item justify-center">
            <span class="small-title">Connectez-vous</span>
            <?php echo "<form class='form-center-item' action='$host/login/askLogin' method='post'>" ?>
            <div class="group">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                    <path d="M3 7l9 6l9 -6" />
                </svg>
                <input class="styled-input" type="email" name="email" id="email" placeholder="Email">
            </div>
            <br>
            <div class="group">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                </svg>
                <input class="styled-input" type="password" name="password" placeholder="Mot de passe">
            </div>
            <div>
                <?php echo isset ($data["error"]) ? "<span class='text-error'>" . $data["error"] . "</span>" : ""; ?>
            </div>
            <br>
            <button class="styled-button" type="submit">
                <span class="styled-span">Se connecter</span>
                </svg>
            </button>
            </form>

            <?php echo "<form action='$host/user/account' method=POST>"; ?>
            <button class="styled-button" type="submit">
                <span class="styled-span">Créer un compte</span>
            </button>
            </form>
        </div>
    </div>
</div>
<?php require_once ("../app/views/footer-view.php"); ?>