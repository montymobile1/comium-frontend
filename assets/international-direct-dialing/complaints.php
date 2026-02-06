<style>
    form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .form-group {
        flex: 0 0 calc(50% - 10px);
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .form-group.full-width {
        flex: 0 0 100%;
    }

    .full-width {
        width: 100%;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input,
    textarea,
    .field {
        border-radius: 4px;
    }

    input,
    textarea,
    select {
        border: 1px solid #CED4DA;
        padding: 11px 15px;
        font-size: 1rem;
        width: 100%;
        box-sizing: border-box;
        background: #fff;
    }

    textarea {
        resize: vertical;
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }

    /* Unified dropdown wrapper (same arrow for country + issue type) */
    .dropdown {
        position: relative;
        width: 100%;
    }

    .dropdown .field {
        width: 100%;
        border: 1px solid #CED4DA;
        padding: 11px 38px 11px 15px;
        /* right padding for arrow */
        font-size: 1rem;
        box-sizing: border-box;
        background: #fff;
    }

    .dropdown .arrow {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: #6c757d;
        /* nice neutral */
        display: flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
    }

    /* Searchable country list */
    .combo-list {
        position: absolute;
        left: 0;
        right: 0;
        top: calc(100% + 6px);
        border: 1px solid #CED4DA;
        background: #fff;
        max-height: 240px;
        overflow: auto;
        z-index: 9999;
        display: none;
    }

    .dropdown.open .combo-list {
        display: block;
    }

    .combo-item {
        padding: 10px 12px;
        cursor: pointer;
        font-size: 0.98rem;
    }

    .combo-item:hover,
    .combo-item.active {
        background: #f5f5f5;
    }

    .combo-empty {
        padding: 10px 12px;
        color: #777;
        font-size: 0.95rem;
    }

    /* Native select: remove default arrow so our arrow is used */
    select.field {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    /* Upload */
    .upload-box {
        border: 2px dashed gray;
        background-color: #ffe5e5;
        padding: 30px;
        text-align: center;
        cursor: pointer;
        position: relative;
        user-select: none;
    }

    .upload-box:hover {
        background-color: #fddcdc;
    }

    .upload-box input[type="file"] {
        display: none;
    }

    .upload-box .icon {
        font-size: 30px;
        color: #dc3545;
        margin-bottom: 10px;
    }

    .file-list {
        margin-top: 10px;
        font-size: 0.9em;
    }

    .file-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff0f0;
        padding: 8px 12px;
        margin-top: 5px;
        border-radius: 5px;
    }

    .file-item span {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 80%;
    }

    .remove-btn {
        background: transparent;
        border: none;
        color: #dc3545;
        font-size: 1.2em;
        cursor: pointer;
    }

    /* Button */
    .submit-btn {
        background-color: #dc3545;
        color: white;
        padding: 12px 30px;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        align-self: flex-start;
        width: auto;
    }

    .submit-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .form-response {
        margin-top: 15px;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .form-group {
            flex: 0 0 100%;
        }
    }
</style>
<form id="comiumForm" novalidate>
    <!-- 1. Customer Name (Mandatory) -->
    <div class="form-group">
        <label for="customerName">Customer Name *</label>
        <input type="text" id="customerName" name="customerName" placeholder="Enter customer name">
        <div class="error" id="error-customerName"></div>
    </div>

    <!-- 2. Comium Mobile No (Mandatory) -->
    <div class="form-group">
        <label for="comiumMobile">Comium Mobile No *</label>
        <input type="text" id="comiumMobile" name="comiumMobile" placeholder="+220 6">
        <div class="error" id="error-comiumMobile"></div>
    </div>

    <!-- 3. Email -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address">
        <div class="error" id="error-email"></div>
    </div>

    <!-- 4. Called Country (Searchable dropdown with SAME arrow style) -->
    <div class="form-group">
        <label for="calledCountrySearch">Called Country *</label>

        <div class="dropdown" id="countryDropdown">
            <input
                type="text"
                class="field"
                id="calledCountrySearch"
                placeholder="Search and select a country"
                autocomplete="off" />
            <span class="arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6"></path>
                </svg>
            </span>
            <div class="combo-list" id="countryList" role="listbox"></div>
        </div>

        <input type="hidden" id="calledCountry" name="calledCountry" value="">
        <div class="error" id="error-calledCountry"></div>
    </div>

    <!-- 5. Called Number (Mandatory) -->
    <div class="form-group">
        <label for="calledNumber">Called Number *</label>
        <input type="text" id="calledNumber" name="calledNumber" placeholder="Enter called number">
        <div class="error" id="error-calledNumber"></div>
    </div>

    <!-- 6. Call Date -->
    <div class="form-group">
        <label for="callDate">Call Date</label>
        <input type="date" id="callDate" name="callDate">
        <div class="error" id="error-callDate"></div>
    </div>

    <!-- 7. Call Time (24 hour) -->
    <div class="form-group">
        <label for="callTime">Call Time (24 hour)</label>
        <input type="time" id="callTime" name="callTime">
        <div class="error" id="error-callTime"></div>
    </div>

    <!-- 8. Nature of Issue (NOW next to Call Time) -->
    <div class="form-group">
        <label for="issueType">Nature of Issue *</label>
        <div class="dropdown">
            <select id="issueType" name="issueType" class="field">
                <option value="">Select an option</option>
                <option value="Call Connectivity">Call Connectivity</option>
                <option value="Channel muting & Balance Drop">Channel muting &amp; Balance Drop</option>
                <option value="Overcharged">Overcharged</option>
                <option value="Invalid Number Recording">Invalid Number Recording</option>
                <option value="Other">Other</option>
                <option value="Suggestion">Suggestion</option>
            </select>
            <span class="arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6"></path>
                </svg>
            </span>
        </div>
        <div class="error" id="error-issueType"></div>
    </div>

    <!-- 9. Detailed Description -->
    <div class="form-group full-width">
        <label for="description">Detailed Description</label>
        <textarea id="description" name="description" placeholder="Enter Here" rows="6"></textarea>
        <div class="error" id="error-description"></div>
    </div>

    <!-- Attachment (optional) - images only, max 5, total 10MB -->
    <div class="form-group full-width">
        <label>Attachment of Screenshot (Optional)</label>
        <div class="upload-box" id="uploadBox">
            <div class="icon">☁️</div>
            <p>Browse or drag screenshots here (images only, max 5 files, total 10MB)</p>
            <input type="file" id="uploadFile" name="uploadFile" multiple accept="image/*">
        </div>
        <div id="fileList" class="file-list"></div>
        <div class="error" id="error-uploadFile"></div>
    </div>

    <div class="form-group full-width">
        <button type="submit" class="submit-btn" id="submitBtn">Submit</button>
    </div>

    <div class="form-response" id="formResponse"></div>
</form>

<script>
    // =========================
    // Config
    // =========================
    const MAX_FILES = 5;
    const MAX_TOTAL_BYTES = 10 * 1024 * 1024; // 10MB
    const CF7_ENDPOINT = 'https://backend.comium.gm/wp-json/contact-form-7/v1/contact-forms/10/feedback';

    // =========================

    // =========================
    const form = document.getElementById('comiumForm');
    const submitBtn = document.getElementById('submitBtn');
    const formResponse = document.getElementById('formResponse');

    // Upload
    const uploadBox = document.getElementById('uploadBox');
    const fileInput = document.getElementById('uploadFile');
    const fileListDisplay = document.getElementById('fileList');
    const uploadError = document.getElementById('error-uploadFile');
    let selectedFiles = [];

    // Country dropdown
    const countryDropdown = document.getElementById('countryDropdown');
    const countrySearch = document.getElementById('calledCountrySearch');
    const countryHidden = document.getElementById('calledCountry');
    const countryList = document.getElementById('countryList');

    // =========================
    // Countries
    // =========================
    const COUNTRIES = [
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana",
        "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile",
        "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Côte d’Ivoire", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)",
        "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
        "Estonia", "Eswatini (fmr. Swaziland)", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada",
        "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
        "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein",
        "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia",
        "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua",
        "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland",
        "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
        "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan",
        "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago",
        "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",
        "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    ];

    // =========================
    // Helpers
    // =========================
    function clearErrors() {
        document.querySelectorAll('.error').forEach(el => el.textContent = '');
    }

    function showError(fieldKey, message) {
        const el = document.getElementById('error-' + fieldKey);
        if (el) el.textContent = message;
    }

    function scrollToFirstError() {
        const first = Array.from(document.querySelectorAll('.error')).find(el => el.textContent.trim().length);
        if (first) first.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // =========================
    // Country searchable dropdown (vanilla)
    // =========================
    let filteredCountries = [...COUNTRIES];
    let activeIndex = -1;

    function openCountryList() {
        countryDropdown.classList.add('open');
        renderCountryList();
    }

    function closeCountryList() {
        countryDropdown.classList.remove('open');
        activeIndex = -1;
        updateActiveItem();
    }

    function filterCountries(query) {
        const q = (query || '').trim().toLowerCase();
        filteredCountries = COUNTRIES.filter(c => c.toLowerCase().includes(q));
        activeIndex = -1;
        renderCountryList();
    }

    function renderCountryList() {
        countryList.innerHTML = '';
        if (!filteredCountries.length) {
            const empty = document.createElement('div');
            empty.className = 'combo-empty';
            empty.textContent = 'No results';
            countryList.appendChild(empty);
            return;
        }
        filteredCountries.forEach((name) => {
            const item = document.createElement('div');
            item.className = 'combo-item';
            item.textContent = name;

            item.addEventListener('mousedown', (e) => {
                e.preventDefault();
                selectCountry(name);
            });

            countryList.appendChild(item);
        });
        updateActiveItem();
    }

    function updateActiveItem() {
        const items = countryList.querySelectorAll('.combo-item');
        items.forEach((el, idx) => el.classList.toggle('active', idx === activeIndex));
        if (activeIndex >= 0 && items[activeIndex]) items[activeIndex].scrollIntoView({
            block: 'nearest'
        });
    }

    function selectCountry(name) {
        countrySearch.value = name;
        countryHidden.value = name;
        closeCountryList();
    }

    countrySearch.addEventListener('focus', () => {
        openCountryList();
        filterCountries(countrySearch.value);
    });
    countrySearch.addEventListener('click', () => {
        openCountryList();
        filterCountries(countrySearch.value);
    });
    countrySearch.addEventListener('input', () => {
        countryHidden.value = '';
        openCountryList();
        filterCountries(countrySearch.value);
    });

    countrySearch.addEventListener('keydown', (e) => {
        const items = countryList.querySelectorAll('.combo-item');
        if (!countryDropdown.classList.contains('open') && (e.key === 'ArrowDown' || e.key === 'ArrowUp')) {
            openCountryList();
            e.preventDefault();
            return;
        }
        if (!items.length) return;

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            activeIndex = Math.min(activeIndex + 1, items.length - 1);
            updateActiveItem();
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            activeIndex = Math.max(activeIndex - 1, 0);
            updateActiveItem();
        } else if (e.key === 'Enter') {
            if (activeIndex >= 0 && filteredCountries[activeIndex]) {
                e.preventDefault();
                selectCountry(filteredCountries[activeIndex]);
            }
        } else if (e.key === 'Escape') {
            closeCountryList();
        }
    });

    document.addEventListener('mousedown', (e) => {
        if (!countryDropdown.contains(e.target)) {
            closeCountryList();
            // If user typed a custom value, keep hidden empty
            if (countryHidden.value && countrySearch.value !== countryHidden.value) {
                countrySearch.value = countryHidden.value;
            }
        }
    });

    // =========================
    // Upload (images only)
    // =========================
    function isImageFile(file) {
        return file && file.type && file.type.startsWith('image/');
    }

    function totalSelectedBytes() {
        return selectedFiles.reduce((sum, f) => sum + f.size, 0);
    }

    function validateFiles() {
        uploadError.textContent = '';
        if (selectedFiles.length > MAX_FILES) {
            uploadError.textContent = `You can upload a maximum of ${MAX_FILES} images.`;
            return false;
        }
        for (const f of selectedFiles) {
            if (!isImageFile(f)) {
                uploadError.textContent = 'Only image files are allowed (screenshots).';
                return false;
            }
        }
        if (totalSelectedBytes() > MAX_TOTAL_BYTES) {
            uploadError.textContent = 'Total upload size must not exceed 10MB.';
            return false;
        }
        return true;
    }

    function renderFiles() {
        fileListDisplay.innerHTML = '';
        selectedFiles.forEach((file, idx) => {
            const row = document.createElement('div');
            row.className = 'file-item';

            const name = document.createElement('span');
            const kb = (file.size / 1024).toFixed(1);
            name.textContent = `${file.name} (${kb} KB)`;

            const remove = document.createElement('button');
            remove.type = 'button';
            remove.className = 'remove-btn';
            remove.innerHTML = '&times;';
            remove.title = 'Remove';
            remove.addEventListener('click', () => {
                selectedFiles.splice(idx, 1);
                renderFiles();
                validateFiles();
            });

            row.appendChild(name);
            row.appendChild(remove);
            fileListDisplay.appendChild(row);
        });
    }

    function addFiles(files) {
        uploadError.textContent = '';
        const incoming = Array.from(files || []);
        const imagesOnly = incoming.filter(isImageFile);

        if (imagesOnly.length !== incoming.length) {
            uploadError.textContent = 'Some files were ignored because only images are allowed.';
        }

        for (const f of imagesOnly) {
            if (selectedFiles.length >= MAX_FILES) break;
            selectedFiles.push(f);
        }

        renderFiles();
        validateFiles();
    }

    uploadBox.addEventListener('click', () => fileInput.click());
    fileInput.addEventListener('change', (e) => {
        addFiles(e.target.files);
        e.target.value = '';
    });

    uploadBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#fddcdc';
    });
    uploadBox.addEventListener('dragleave', () => {
        uploadBox.style.backgroundColor = '#ffe5e5';
    });
    uploadBox.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#ffe5e5';
        addFiles(e.dataTransfer.files);
    });

    // =========================
    // Validation + AJAX
    // =========================
    function validateForm() {
        clearErrors();
        let ok = true;

        const customerName = document.getElementById('customerName').value.trim();
        const comiumMobile = document.getElementById('comiumMobile').value.trim();
        const email = document.getElementById('email').value.trim();
        const calledCountry = countryHidden.value.trim();
        const calledNumber = document.getElementById('calledNumber').value.trim();
        const issueType = document.getElementById('issueType').value;

        if (!customerName) {
            showError('customerName', 'Customer Name is required.');
            ok = false;
        }
        if (!comiumMobile) {
            showError('comiumMobile', 'Comium Mobile No is required.');
            ok = false;
        }
        if (email && !isValidEmail(email)) {
            showError('email', 'Please enter a valid email address.');
            ok = false;
        }
        if (!calledCountry) {
            showError('calledCountry', 'Please select a country.');
            ok = false;
        }
        if (!calledNumber) {
            showError('calledNumber', 'Called Number is required.');
            ok = false;
        }
        if (!issueType) {
            showError('issueType', 'Please select the nature of the issue.');
            ok = false;
        }

        if (!validateFiles()) ok = false;

        return ok;
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        formResponse.textContent = '';

        if (!validateForm()) {
            scrollToFirstError();
            return;
        }

        submitBtn.disabled = true;

        try {
            const formData = new FormData(form);
            formData.append('_wpcf7_unit_tag', 'rte');

            // append images (optional)
            selectedFiles.forEach((file, i) => {
                formData.append(`screenshot_${i + 1}`, file); // screenshot_1..5
            });

            const res = await fetch(CF7_ENDPOINT, {
                method: 'POST',
                body: formData
            });
            const data = await res.json();

            if (data.status === 'mail_sent') {
                formResponse.style.color = 'green';
                formResponse.textContent = data.message || 'Submitted successfully!';
                form.reset();

                selectedFiles = [];
                renderFiles();

                countrySearch.value = '';
                countryHidden.value = '';
            } else {
                formResponse.style.color = 'red';
                formResponse.textContent = data.message || 'Submission failed. Please try again.';
            }
        } catch (err) {
            formResponse.style.color = 'red';
            formResponse.textContent = 'An error occurred while submitting. Please try again.';
        } finally {
            submitBtn.disabled = false;
        }
    });
</script>