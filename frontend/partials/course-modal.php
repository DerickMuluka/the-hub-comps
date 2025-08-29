<div class="course-modal" id="courseModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <!--<button class="modal-close">&times;</button>-->
        <div class="modal-body">
            <!--<div class="modal-image">
                <img id="modalCourseImage" src="" alt="Course Image">
            </div>-->
            <div class="modal-details">
                <h2 id="modalCourseTitle"></h2>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> <span id="modalCourseDuration"></span></span>
                    <span><i class="fas fa-money-bill-wave"></i> <span id="modalCoursePrice"></span></span>
                    <span><i class="fas fa-user-graduate"></i> <span id="modalCourseLevel"></span></span>
                </div>
                <div class="course-description" id="modalCourseDescription"></div>
                <div class="course-syllabus" id="modalCourseSyllabus"></div>
                <div class="modal-actions">
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary">Enroll Now</a>
                    <!--<button class="btn btn-outline modal-close-btn">Close</button>-->
                </div>
            </div>
        </div>
    </div>
</div>