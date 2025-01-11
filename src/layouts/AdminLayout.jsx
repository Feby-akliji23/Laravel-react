import React from 'react';
import { Link, useLocation, useNavigate } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { clearToken } from '../store/authSlice';
import axios from 'axios';

const AdminLayout = ({ children }) => {
  const location = useLocation();
  const navigate = useNavigate();
  const dispatch = useDispatch();
  const token = useSelector((state) => state.auth.token);

  const navLinks = [
    { name: 'Dashboard', path: '/admin' },
    { name: 'Bencana', path: '/admin/admin-bencana' },
    { name: 'Settings', path: '/admin/settings' },
  ];

  const handleLogout = async () => {
    try {
      await axios.post(
        'http://127.0.0.1:8000/api/logout',
        {},
        { headers: { Authorization: `Bearer ${token}` } }
      );
      dispatch(clearToken());
      navigate('/login');
    } catch (error) {
      console.error('Logout failed:', error);
    }
  };

  return (
    <div className="flex min-h-screen bg-gray-100">
      <aside className="w-64 bg-indigo-800 text-white shadow-md">
        <div className="p-6 text-center text-2xl font-bold">Admin Panel</div>
        <nav className="mt-6">
          <ul>
            {navLinks.map(({ name, path }) => (
              <li
                key={name}
                className={`py-2 px-4 ${location.pathname === path ? 'bg-indigo-700' : 'hover:bg-indigo-600'}`}
              >
                <Link to={path}>{name}</Link>
              </li>
            ))}
          </ul>
        </nav>
      </aside>

      <div className="flex-1 flex flex-col">
        <header className="bg-white shadow p-4 flex justify-end">
          <button onClick={handleLogout} className="bg-red-500 text-white px-4 py-2 rounded">
            Log Out
          </button>
        </header>

        <main className="flex-grow p-4 bg-blue-50">{children}</main>

        <footer className="bg-indigo-900 text-white p-4 text-center">
          &copy; 2025 Admin Dashboard
        </footer>
      </div>
    </div>
  );
};

export default AdminLayout;
