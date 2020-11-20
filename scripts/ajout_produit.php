<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <section class="container mt-5">
        <form action="test.php" method="POST">
            <div class="form-group row">
                <label for="nom_produit" class="col-md-3 col-form-label">Nom du produit:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="nom_produit" name="nom_produit" placeholder="Exemple : iphone 6, etc.">
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label">Description:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description du produit">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-3 col-form-label">Image du produit</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_initial" class="col-md-3 col-form-label">Prix initial (en €):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_initial" name="prix_initial" placeholder="Exemple : 2€">
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label">Prix du clic (en cts)</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_clic" name="prix_clic" placeholder="Exemple : 30cts">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_prix" class="col-md-3 col-form-label">Augmentation prix enchère (en cts):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_prix" name="augmentation_prix" placeholder="Exemple : 2cts">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label">Augmentation durée enchère (en secondes):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_duree" name="augmentation_duree" placeholder="Exemple : 30sec">
                </div>
            </div>

            <div class="justify-content-end d-flex row">
                <input class="btn btn-secondary  w-md-25 w-50 mr-3" type="submit" value="Ajouter le produit">
            </div>
        </form>
    </section>
</body>

</html>