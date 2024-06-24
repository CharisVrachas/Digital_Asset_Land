<?php include_once "config/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <!-- Include any necessary Css files here -->
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/main.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/header.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/footer.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/home.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/airdrop-cards.min.css" />
    <link rel="stylesheet" href="<?php echo $HOST; ?>assets/css/login.min.css" />
  </head>

  <body class="background-radial-gradient">
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="">
            <img src="<?php echo $HOST; ?>assets/images/logo.jpg" alt="Logo"/>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Airdrops 
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753"/>
                  </svg>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                  <a class="dropdown-item">Bitcoin Airdrops</a>
                  <a class="dropdown-item">Ethereum Airdrops</a>
                  <a class="dropdown-item">Solana Airdrops</a>
                  <a class="dropdown-item">Own-Chain Airdrops</a>
                  <a class="dropdown-item">Bridge Airdrops</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guides
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753"/>
                  </svg>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                  <a class="dropdown-item" href="#">Airdrop Guides</a>
                  <a class="dropdown-item" href="#">Crypto Exchanges</a>
                  <a class="dropdown-item" href="#">DEFI Platforms</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Airdrop News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
              </li>
            </ul>
            <a href="/Digital_Asset_Land/auth/login" class="btn btn-primary login-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m0 5.996V14H3s-1 0-1-1 1-4 6-4q.845.002 1.544.107a4.5 4.5 0 0 0-.803.918A11 11 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664zM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
              </svg>Log In
            </a>
          </div>
        </div>
      </nav>
    </header>

    <main>