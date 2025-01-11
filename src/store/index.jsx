import { configureStore } from '@reduxjs/toolkit';
import { persistStore, persistReducer } from 'redux-persist';
import storage from 'redux-persist/lib/storage'; // Menggunakan localStorage
import { combineReducers } from 'redux';
import authReducer from './authSlice';

// Konfigurasi redux-persist
const persistConfig = {
  key: 'root', // Key utama untuk penyimpanan
  storage,     // Penyimpanan menggunakan localStorage
};

// Gabungkan reducer jika ada lebih dari satu
const rootReducer = combineReducers({
  auth: authReducer,
});

// Bungkus reducer dengan persistReducer
const persistedReducer = persistReducer(persistConfig, rootReducer);

// Buat store menggunakan reducer yang telah dipersist
const store = configureStore({
  reducer: persistedReducer,
});

// Buat persistor untuk menyimpan/memuat state yang dipersist
export const persistor = persistStore(store);

export default store;
