let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Mai",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Việt Nam",
        poster: "url('img/mai.jpg')",
        theLoai: "Phim chiếu rạp",
    },
    {
        id: 2,
        tenPhim: "Conan",
        namPhatHanh: 2023,
        tuoi: 10,
        thoiLuong: 1.5,
        quocGia: "Nhật Bản",
        poster: "url('img/conan.jpg')",
        theLoai: "Phim hoạt hình",
    }
];

let phimHienTai = danhSachPhim[0];

let banner = document.getElementsByClassName('banner')[0];

function chonPhim(idPhim){
    for (let i = 0;i < danhSachPhim.length; i++){
        if (danhSachPhim[i].id == idPhim){
            banner.style.backgroundImage = danhSachPhim[i].poster;
        }
    }
}