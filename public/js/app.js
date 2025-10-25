onsubmit="return confirm('Are you sure?');"


    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (confirm('Are you sure you want to delete this computer?')) {
                this.submit();
            }
        });
    });
