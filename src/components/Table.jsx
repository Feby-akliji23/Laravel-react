import React from "react";

const Table = ({ data = [], getWilayahName, handleRowClick, currentPage }) => {
  return (
    <div className="overflow-x-auto">
      <table className="min-w-full table-auto border-collapse shadow-lg rounded-lg overflow-hidden">
        <thead>
          <tr className="bg-indigo-600 text-white text-left">
            <th className="px-4 py-3 text-sm font-semibold">No</th>
            <th className="px-4 py-3 text-sm font-semibold">KIB</th>
            <th className="px-4 py-3 text-sm font-semibold">Tanggal</th>
            <th className="px-4 py-3 text-sm font-semibold">Wilayah</th>
            <th className="px-4 py-3 text-sm font-semibold">Kejadian</th>
            <th className="px-4 py-3 text-sm font-semibold">Detail</th>
          </tr>
        </thead>
        <tbody>
          {data.length > 0 ? (
            data.map((item, index) => (
              <tr
                key={index}
                className="odd:bg-gray-100 even:bg-white hover:bg-gray-200 cursor-pointer transition duration-200"
                onClick={() => handleRowClick(item)}
              >
                <td className="px-4 py-3 text-sm border-t">{(currentPage - 1) * 10 + (index + 1)}</td>
                <td className="px-4 py-3 text-sm border-t">{item.kib}</td>
                <td className="px-4 py-3 text-sm border-t">{item.tanggal || "Tidak ada tanggal"}</td>
                <td className="px-4 py-3 text-sm border-t">{getWilayahName(item.wilayah_id)}</td>
                <td className="px-4 py-3 text-sm border-t">{item.kejadian}</td>
                <td className="px-4 py-3 text-sm border-t">{item.detail}</td>
              </tr>
            ))
          ) : (
            <tr>
              <td colSpan="6" className="text-center py-6 text-gray-500">
                Tidak ada data yang tersedia
              </td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  );
};

export default Table;
