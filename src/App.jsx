// src/App.jsx
import React from 'react';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import AdminLayout from './layouts/AdminLayout';
import Login from './pages/auth/Login';
import Register from './pages/auth/Register';
import Mahasiswa from './pages/admin/AdminBencana';
import PrivateRoute from './utils/PrivateRoute';

const App = () => {
  return (
    <Router>
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />

        <Route path="/" element={<Navigate to="/login" />} />

        <Route
          path="/admin"
          element={
            <PrivateRoute>
              <AdminLayout>
                <h1>Dashboard Admin</h1>
              </AdminLayout>
            </PrivateRoute>
          }
        />
        <Route
          path="/admin/admin-bencana"
          element={
            <PrivateRoute>
              <AdminLayout>
                <Mahasiswa />
              </AdminLayout>
            </PrivateRoute>
          }
        />
        <Route
          path="/admin/settings"
          element={
            <PrivateRoute>
              <AdminLayout>
                <h1>Setting Admin</h1>
              </AdminLayout>
            </PrivateRoute>
          }
        />
      </Routes>
    </Router>
  );
};

export default App; 
