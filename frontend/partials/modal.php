<div class="modal" id="generalModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <div class="modal-header">
            <h3 id="modalTitle"></h3>
        </div>
        <div class="modal-body" id="modalBody">
            <!-- Content will be inserted here dynamically -->
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline modal-close-btn">Close</button>
            <button class="btn btn-primary" id="modalActionBtn">Confirm</button>
        </div>
    </div>
</div>

<style>
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2000;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    position: relative;
    background-color: white;
    margin: 5% auto;
    padding: 20px;
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    z-index: 2001;
    animation: modalFadeIn 0.3s;
}

.modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem;
    background: none;
    border: none;
    cursor: pointer;
    color: #666;
}

.modal-header {
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
    margin-bottom: 15px;
}

.modal-footer {
    padding-top: 15px;
    border-top: 1px solid #eee;
    margin-top: 15px;
    text-align: right;
}

@keyframes modalFadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}
</style>

<script>
// Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('generalModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalBody = document.getElementById('modalBody');
    const modalActionBtn = document.getElementById('modalActionBtn');
    const closeButtons = document.querySelectorAll('.modal-close, .modal-close-btn');
    
    // Function to open modal
    window.openModal = function(title, content, actionText = 'Confirm', actionCallback = null) {
        modalTitle.textContent = title;
        modalBody.innerHTML = content;
        
        if (actionCallback) {
            modalActionBtn.textContent = actionText;
            modalActionBtn.style.display = 'inline-block';
            modalActionBtn.onclick = function() {
                actionCallback();
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            };
        } else {
            modalActionBtn.style.display = 'none';
        }
        
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    };
    
    // Close modal
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    });
    
    // Close when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});
</script>
