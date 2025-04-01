SELECT 'CREATE DATABASE contask_db'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'contask_db')\gexec
