import React, { useEffect, useState } from "react";
import axios from "axios";
import { useSelector } from "react-redux";
import Swal from "sweetalert2";
import Button from "../../components/Button";
import Table from "../../components/Table";
import Form from "../../components/Form";

const Bencana = () => {
  const token = useSelector((state) => state.auth.token);
  const [bencana, setBencana] = useState([]);
  const [wilayahList, setWilayahList] = useState([]);
  const [filters, setFilters] = useState({
    wilayah_id: "",
    tanggal_dari: "",
    tanggal_hingga: "",
    search: "",
  });
  const [formData, setFormData] = useState({
    kib: "",
    wilayah_id: "",
    tanggal: "",
    kejadian: "",
    detail: "",
  });
  const [showForm, setShowForm] = useState(false);
  const [editMode, setEditMode] = useState(false);
  const [currentBencanaId, setCurrentBencanaId] = useState(null);

  // Pagination
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);

const fetchBencana = async (page = 1) => {
    const cleanFilters = { ...filters };

    if (!cleanFilters.tanggal_dari) delete cleanFilters.tanggal_dari;
    if (!cleanFilters.tanggal_hingga) delete cleanFilters.tanggal_hingga;

    try {
        const response = await axios.get("http://127.0.0.1:8000/api/bencana", {
            params: { page, ...cleanFilters },
            headers: { Authorization: `Bearer ${token}` },
        });

        const responseData = response.data;

        // Set data bencana dari pagination
        setBencana(responseData.data.data);
        setCurrentPage(responseData.data.current_page);
        setTotalPages(responseData.data.last_page);

        // Set daftar wilayah langsung dari respons API
        setWilayahList(responseData.allWilayah);
    } catch (err) {
        console.error("Error fetching bencana:", err);
        Swal.fire("Error", "Gagal mengambil data bencana.", "error");
    }
};



  useEffect(() => {
    fetchBencana(currentPage);
  }, [filters, currentPage]);

  const handleFilterChange = (e) => {
    const { name, value } = e.target;
    setFilters({ ...filters, [name]: value });
    setCurrentPage(1); // Reset pagination jika filter berubah
  };

const handleRowClick = (bencana) => {
  Swal.fire({
    title: "Pilih Aksi",
    text: "Apakah Anda ingin mengedit atau menghapus data ini?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Edit",
    cancelButtonText: "Delete",
  }).then(async (result) => {
    if (result.isConfirmed) {
      // Jika memilih Edit
      setFormData({
        kib: bencana.kib,
        wilayah_id: bencana.wilayah_id,
        tanggal: bencana.tanggal,
        kejadian: bencana.kejadian,
        detail: bencana.detail,
      });
      setEditMode(true);
      setCurrentBencanaId(bencana.id);
      setShowForm(true);
    } else if (result.dismiss === Swal.DismissReason.cancel) {
      // Jika memilih Delete
      handleDelete(bencana.id);
    }
  });
};

const handleDelete = async (id) => {
  try {
    const confirm = await Swal.fire({
      title: "Konfirmasi Hapus",
      text: "Apakah Anda yakin ingin menghapus data ini?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Ya, Hapus",
      cancelButtonText: "Batal",
    });

    if (confirm.isConfirmed) {
      await axios.delete(`http://127.0.0.1:8000/api/bencana/${id}`, {
        headers: { Authorization: `Bearer ${token}` },
      });
      Swal.fire("Berhasil!", "Data berhasil dihapus.", "success");
      fetchBencana(currentPage);
    }
  } catch (err) {
    console.error("Error deleting bencana:", err);
    Swal.fire("Error", "Gagal menghapus data.", "error");
  }
};

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      if (editMode) {
        await axios.put(
          `http://127.0.0.1:8000/api/bencana/${currentBencanaId}`,
          formData,
          { headers: { Authorization: `Bearer ${token}` } }
        );
        Swal.fire("Berhasil!", "Data bencana berhasil diperbarui.", "success");
      } else {
        await axios.post("http://127.0.0.1:8000/api/bencana", formData, {
          headers: { Authorization: `Bearer ${token}` },
        });
        Swal.fire("Berhasil!", "Data bencana berhasil ditambahkan.", "success");
      }

      fetchBencana(currentPage);
      setFormData({ kib: "", wilayah_id: "", tanggal: "", kejadian: "", detail: "" });
      setShowForm(false);
      setEditMode(false); 
      setCurrentBencanaId(null);
    } catch (err) {
      console.error(err);
      Swal.fire("Error", "Terjadi kesalahan saat menyimpan data.", "error");
    }
  };


  const handlePageChange = (page) => {
    if (page >= 1 && page <= totalPages) {
      setCurrentPage(page);
    }
  };

  return (
    <div className="p-6">
      <h2 className="text-3xl font-semibold mb-6 text-center">
        Daftar Bencana Tanah Longsor
      </h2>

      <div className="mb-4 text-right">
        <Button
          style="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-all duration-200"
          text="Tambah Data Bencana"
          onClick={() => {
            setShowForm(true);
            setEditMode(false); // Pastikan editMode false
            setFormData({ kib: "", wilayah_id: "", tanggal: "", kejadian: "", detail: "" }); // Reset form
          }}
        />
      </div>

      {/* Filters */}
      <div className="flex flex-wrap gap-4 mb-4">
        <select
          name="wilayah_id"
          value={filters.wilayah_id}
          onChange={handleFilterChange}
          className="p-2 border rounded-lg"
        >
          <option value="">Semua Wilayah</option>
          {wilayahList.map((wilayah) => (
            <option key={wilayah.id} value={wilayah.id}>
              {wilayah.nama}
            </option>
          ))}
        </select>

        <div className="flex gap-2">
          <input
            type="date"
            name="tanggal_dari"
            value={filters.tanggal_dari}
            onChange={handleFilterChange}
            className="p-2 border rounded-lg"
          />
          <input
            type="date"
            name="tanggal_hingga"
            value={filters.tanggal_hingga}
            onChange={handleFilterChange}
            className="p-2 border rounded-lg"
          />
        </div>

        <input
          type="text"
          name="search"
          placeholder="Cari kejadian atau detail..."
          value={filters.search}
          onChange={handleFilterChange}
          className="p-2 border rounded-lg flex-1"
        />
      </div>
      <Table
        data={bencana}
        getWilayahName={(id) => {
          const wilayah = wilayahList.find((item) => item.id === id);
          return wilayah?.nama || "Wilayah Tidak Ditemukan";
        }}
        handleRowClick={handleRowClick}
        currentPage={currentPage}
      />

      <div className="flex justify-center items-center space-x-2 mt-4">
        <button
          onClick={() => handlePageChange(currentPage - 1)}
          disabled={currentPage === 1}
          className="px-4 py-2 bg-gray-300 rounded disabled:bg-gray-200"
        >
          Previous
        </button>
        <span>
          Page {currentPage} of {totalPages}
        </span>
        <button
          onClick={() => handlePageChange(currentPage + 1)}
          disabled={currentPage === totalPages}
          className="px-4 py-2 bg-gray-300 rounded disabled:bg-gray-200"
        >
          Next
        </button>
      </div>

      {showForm && (
        <Form
          formData={formData}
          handleChange={(e) => setFormData({ ...formData, [e.target.name]: e.target.value })}
          handleSubmit={handleSubmit}
          editMode={editMode}
          setShowForm={setShowForm}
          wilayahList={wilayahList.map((item) => [item.id, item.nama])}
        />
      )}
    </div>
  );
};

export default Bencana;
