document.addEventListener('DOMContentLoaded', function() {
    const citySelect = document.getElementById('city');
    const districtSelect = document.getElementById('district');
    const wardSelect = document.getElementById('ward');

    // Định nghĩa danh sách các thành phố và các quận theo thành phố
    const cities = {
        'Hồ Chí Minh': ['Quận 1', 'Quận 2', 'Quận 7'],
        'Đà Nẵng' : ['Quận Sơn Trà', 'Quận Cẩm Lệ']
    };

    // Định nghĩa danh sách các phường theo quận
    const wardsByDistrict = {
        'Quận 1': ['Phường 4', 'Phường Bến Nghé'],
        'Quận 2': ['Phường 7', 'Phường Thảo Điền'],
        'Quận 7': ['Phường Phú Mỹ'],
        'Quận Sơn Trà' : ['Phường Phước Mỹ', 'Phường Thọ Quang'],
        'Quận Cẩm Lệ' : ['Phường Hòa An', 'Phường Hòa Xuân']
    };

    

    // Tạo các option cho dropdown thành phố
    Object.keys(cities).forEach(function(city) {
        const optionElem = document.createElement('option');
        optionElem.textContent = city;
        optionElem.value = city;
        citySelect.appendChild(optionElem);
    });

    // Xử lý sự kiện khi chọn thành phố
    document.getElementById("city").addEventListener("change", function() {
        const selectedCity = this.value;
        const districts = cities[selectedCity];
        const districtSelect = document.getElementById("district");
        populateDropdown(districtSelect, districts);
        populateWardOptions(selectedCity); // Tự động điền các tùy chọn cho phường
    });

    // Xử lý sự kiện khi chọn quận
    districtSelect.addEventListener('change', function() {
        const selectedDistrict = this.value;
        if (selectedDistrict) {
            const wards = wardsByDistrict[selectedDistrict];
            populateDropdown(wardSelect, wards);
        } else {
            clearDropdown(wardSelect);
        }
    });

    // Hàm để điền các tùy chọn vào dropdown phường
    function populateWardOptions(selectedCity) {
        const selectedDistrict = districtSelect.value;
        const wards = wardsByDistrict[selectedDistrict];
        populateDropdown(wardSelect, wards);
    }

    // Hàm để điền các tùy chọn vào dropdown
        function populateDropdown(select, options) {
            // Xóa tất cả các tùy chọn hiện có trừ option đầu tiên
            // Thêm các tùy chọn mới từ mảng options
            options.forEach(function(option) {
                const optionElem = document.createElement('option');
                optionElem.textContent = option;
                optionElem.value = option;
                select.appendChild(optionElem);
            });
        }

    // Hàm để xóa tất cả các tùy chọn trong dropdown
    function clearDropdown(select) {
        // Lưu trữ các tùy chọn mặc định
        const defaultOption = select.options[0];
        select.innerHTML = '';
        // Thêm lại các tùy chọn mặc định
        select.appendChild(defaultOption);
    }
});
