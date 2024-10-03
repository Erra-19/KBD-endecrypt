from mocrypt import encrypt_text, decrypt_text

plain_text=input('Please put the words you want to encrypt: ')
encryption = encrypt_text(plain_text)

print(encryption)

encrypted_text=input('Please put the hash you want to decrypt: ')
decrypt = decrypt_text(encrypted_text)

print(decrypt)