<!-- resources/views/oefeningen/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefeningen Beheren</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Oefeningen Beheren</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Beschrijving</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody id="oefeningenTable">
                <!-- Rows will be populated by JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Oefening Bewerken</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editOefeningId">
                        <div class="form-group">
                            <label for="editNaam">Naam</label>
                            <input type="text" id="editNaam" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editBeschrijving">Beschrijving</label>
                            <input type="text" id="editBeschrijving" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch and display oefeningen
            function fetchOefeningen() {
                $.get('/api/oefeningen', function(data) {
                    let rows = '';
                    data.data.forEach(function(oefening) {
                        rows += `
                            <tr>
                                <td>${oefening.naam}</td>
                                <td>${oefening.beschrijving}</td>
                                <td>
                                    <button class="btn btn-primary btn-edit" data-id="${oefening.id}" data-naam="${oefening.naam}" data-beschrijving="${oefening.beschrijving}">Bewerken</button>
                                    <button class="btn btn-danger btn-delete" data-id="${oefening.id}">Verwijderen</button>
                                </td>
                            </tr>
                        `;
                    });
                    $('#oefeningenTable').html(rows);
                });
            }

            fetchOefeningen();

            // Handle edit button click
            $(document).on('click', '.btn-edit', function() {
                const id = $(this).data('id');
                const naam = $(this).data('naam');
                const beschrijving = $(this).data('beschrijving');

                $('#editOefeningId').val(id);
                $('#editNaam').val(naam);
                $('#editBeschrijving').val(beschrijving);

                $('#editModal').modal('show');
            });

            // Handle edit form submission
            $('#editForm').submit(function(event) {
                event.preventDefault();

                const id = $('#editOefeningId').val();
                const naam = $('#editNaam').val();
                const beschrijving = $('#editBeschrijving').val();

                $.ajax({
                    url: `/api/oefeningen/${id}`,
                    type: 'PUT',
                    data: {
                        naam: naam,
                        beschrijving: beschrijving,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#editModal').modal('hide');
                        fetchOefeningen();
                    },
                    error: function(response) {
                        alert('Fout bij het bijwerken van de oefening');
                    }
                });
            });

            // Handle delete button click
            $(document).on('click', '.btn-delete', function() {
                if (!confirm('Weet je zeker dat je deze oefening wilt verwijderen?')) return;

                const id = $(this).data('id');

                $.ajax({
                    url: `/api/oefeningen/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        fetchOefeningen();
                    },
                    error: function(response) {
                        alert('Fout bij het verwijderen van de oefening');
                    }
                });
            });
        });
    </script>
</body>
</html>
