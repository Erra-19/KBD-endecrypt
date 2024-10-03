from cryptography.hazmat.primitives.ciphers import Cipher, algorithms, modes
from cryptography.hazmat.primitives import padding
import os
import base64

def encrypt_text(textbased):
    key = os.urandom(16)
    iv = os.urandom(16)
    cipher = Cipher(algorithms.AES(key), modes.CBC(iv))
    encryptor = cipher.encryptor()
    padder = padding.PKCS7(128).padder()
    padded_data = padder.update(textbased.encode('utf-8')) + padder.finalize()
    encrypted_text = encryptor.update(padded_data) + encryptor.finalize()
    encoded_iv = base64.b64encode(iv)
    encoded_text = base64.b64encode(encrypted_text)
    encoded_key = base64.b64encode(key)
    encrypted_data = f'{encoded_key.decode("utf-8")}${encoded_iv.decode("utf-8")}${encoded_text.decode("utf-8")}'

    return encrypted_data

def decrypt_text(encrypted_text):
    encoded_key, encoded_iv, encoded_cipher_text = encrypted_text.split('$')
    key = base64.b64decode(encoded_key)
    iv = base64.b64decode(encoded_iv)
    cipher_text = base64.b64decode(encoded_cipher_text)
    cipher = Cipher(algorithms.AES(key), modes.CBC(iv))
    decryptor = cipher.decryptor()
    decrypted_padded_data = decryptor.update(cipher_text) + decryptor.finalize()
    unpadder = padding.PKCS7(128).unpadder()
    decrypted_data = unpadder.update(decrypted_padded_data) + unpadder.finalize()
    
    return decrypted_data.decode('utf-8')