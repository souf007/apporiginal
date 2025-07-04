<?php include("companies_logic.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Sociétés</title>
    <meta name="description" content="<?php echo $settings['store']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="companies.scss">
    
    <link rel="shortcut icon" href="favicon.ico">
    <?php include("onesignal.php"); ?>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <?php include('mainmenu.php'); ?>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <!-- Header -->
        <?php include('header.php'); ?>

        <main class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Sociétés</h2>
                <?php if (preg_match("#Ajouter Sociétés,#", $_SESSION['easybm_roles'])): ?>
                    <a href="#" class="btn btn-primary lx-open-popup" data-header="Ajouter un nouveau" data-table="companies" data-title="company">+ Nouvelle société</a>
                <?php endif; ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row gx-3 gy-2 align-items-center">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="keyword" placeholder="Rechercher par nom, ICE, téléphone...">
                        </div>
                        <div class="col-auto">
                            <a href="companies.php" class="btn btn-outline-secondary"><i class="fas fa-sync-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <div class="lx-table-companies">
                    <!-- Companies table will be loaded here by JavaScript -->
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="lx-action-bulk">
                     <?php if(preg_match("#Exporter Sociétés,#",$_SESSION['easybm_roles'])): ?>
                        <a href="#" class="btn btn-secondary lx-open-popup" data-title="export"><i class="fa fa-download"></i> Exporter</a>
                     <?php endif; ?>
                </div>
                <div class="d-flex align-items-center">
                    <label for="nbrows" class="form-label me-2">Afficher:</label>
                    <select name="nbrows" id="nbrows" class="form-select form-select-sm me-2" style="width: auto;">
                        <option value="50" <?php if($nb==50) echo "selected"; ?>>50</option>
                        <option value="100" <?php if($nb==100) echo "selected"; ?>>100</option>
                        <option value="200" <?php if($nb==200) echo "selected"; ?>>200</option>
                        <option value="500" <?php if($nb==500) echo "selected"; ?>>500</option>
                    </select>
                    <span class="text-muted">lignes par page</span>
                </div>
                <div class="lx-pagination">
                    <!-- Pagination will be loaded here -->
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Modals -->
<!-- Add your modals here, converted to Bootstrap 5 modals -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- Custom JS -->
<script src="companies.js"></script>

</body>
</html>
