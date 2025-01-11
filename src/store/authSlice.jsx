// src/store/authSlice.jsx
import { createSlice } from '@reduxjs/toolkit';

// Initial state for authentication
const initialState = {
  token: localStorage.getItem('authToken') || null,
  isAuthenticated: !!localStorage.getItem('authToken'),
};

// Create the auth slice
const authSlice = createSlice({
  name: 'auth',
  initialState,
  reducers: {
    setToken: (state, action) => {
      state.token = action.payload;
      state.isAuthenticated = true;
    },
    clearToken: (state) => {
      state.token = null;
      state.isAuthenticated = false;
    },
  },
});

export const { setToken, clearToken } = authSlice.actions;

export default authSlice.reducer;
