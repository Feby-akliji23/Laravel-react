import React from "react";

const Form = ({
  formData,
  handleChange,
  handleSubmit,
  editMode,
  setShowForm,
  bencana, // Tambahkan bencana sebagai props
}) => {
  // Fungsi untuk mendapatkan daftar wilayah unik dengan wilayah_id
  const getWilayahList = () => {
    if (!bencana || bencana.length === 0) return [];
    const wilayahMap = new Map();
    bencana.forEach((item) => {
      if (item.wilayah?.nama && item.wilayah_id) {
        wilayahMap.set(item.wilayah_id, item.wilayah.nama);
      }
    });
    return Array.from(wilayahMap.entries());
  };

  const wilayahList = getWilayahList();

  return (
    <div className="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center z-10">
      <div className="bg-white p-8 rounded-lg shadow-lg w-96">
        <h3 className="text-xl font-semibold mb-4 text-center">
          {editMode ? "Edit Data Bencana" : "Tambah Data Bencana"}
        </h3>
        <form onSubmit={handleSubmit}>
          <div className="mb-4">
            <input
              type="text"
              name="kib"
              placeholder="KIB"
              value={formData.kib}
              onChange={handleChange}
              className="w-full p-3 border rounded-lg"
              required
            />
          </div>
          <div className="mb-4">
            <select
              name="wilayah_id"
              value={formData.wilayah_id}
              onChange={handleChange}
              className="w-full p-3 border rounded-lg"
              required
            >
              <option value="">Pilih Wilayah</option>
              {wilayahList.map(([id, nama]) => (
                <option key={id} value={id}>
                  {nama}
                </option>
              ))}
            </select>
          </div>
          <div className="mb-4">
            <input
              type="text"
              name="kejadian"
              placeholder="Kejadian"
              value={formData.kejadian}
              onChange={handleChange}
              className="w-full p-3 border rounded-lg"
              required
            />
          </div>
          <div className="mb-4">
            <textarea
              name="detail"
              placeholder="Detail"
              value={formData.detail}
              onChange={handleChange}
              className="w-full p-3 border rounded-lg"
              required
            />
          </div>
          <div className="flex justify-between">
            <button
              type="button"
              onClick={() => setShowForm(false)}
              className="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600"
            >
              Batal
            </button>
            <button
              type="submit"
              className="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700"
            >
              {editMode ? "Update" : "Tambah"}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default Form;
