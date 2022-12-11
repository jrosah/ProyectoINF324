CREATE TABLE FlujoProceso(
    Flujo varchar(5),
    Proceso varchar(5),
    Proceso_siguiente varchar(5),	
    Tipo varchar(1),
    Pantalla varchar(50),
    Rol varchar(50)
);

-- PROCESO DE APERTURA EN CUENTA CORRIENTE

INSERT INTO FlujoProceso (Flujo, Proceso, Proceso_siguiente, Tipo, Pantalla, Rol) VALUES
('F1', 'P1', 'P2', 'I', 'Ingresar', 'Cliente'),
('F1', 'P2', 'P3', 'P', 'Recoger', 'Cliente'),
('F1', 'P3', 'P4', 'P', 'Esperar', 'Cliente'),
('F1', 'P4', 'P5', 'P', 'Atender', 'Plataforma'),
('F1', 'P5', 'P6', 'P', 'Pedir', 'Plataforma'),
('F1', 'P6', '-',  'C', 'Documentos', 'Plataforma'),
('F1', 'P7', '-',  'F', 'Rechazar', 'Plataforma'),
('F1', 'P8', 'P9',  'P', 'Realizar', 'Sistema'),
('F1', 'P9', '-', 'F', 'Notificar', 'Cliente');

-- PROCESO DEPOSITO BANCARIO
INSERT INTO FlujoProceso (Flujo, Proceso, Proceso_siguiente, Tipo, Pantalla, Rol) VALUES
('F2', 'P1', 'P2', 'I', 'RecogerD', 'Cliente'),
('F2', 'P2', 'P3', 'P', 'EsperaD', 'Cliente'),
('F2', 'P3', 'P4', 'P', 'AtiendeD', 'Cajero'),
('F2', 'P4', 'P5', 'P', 'DocumentosD', 'Cajero'),
('F2', 'P5', '-', 'C', 'PideDocumento', 'Cajero'),
('F2', 'P6', '-',  'F', 'RechazaD', 'Cliente'),
('F2', 'P7', 'P8',  'P', 'SolicitaD', 'Cliente'),
('F2', 'P8', 'P9',  'P', 'ProporcionaDatos', 'Cajero'),
('F2', 'P9', '-', 'C', 'VerificaCuenta', 'Sistema'),
('F2', 'P10', '-', 'F', 'NotificacionError', 'Cajero'),
('F2', 'P11', 'P12', 'P', 'ConfirmacionDeposito', 'Sistema'),
('F2', 'P12', 'P13', 'P', 'ImprimeRecibo', 'Cajero'),
('F2', 'P13', '-', 'F', 'EntregaRecibo', 'Cliente');


-- PROCESO PRESTAMO BANCARIO

INSERT INTO FlujoProceso (Flujo, Proceso, Proceso_siguiente, Tipo, Pantalla, Rol) VALUES
('F3', 'P1', 'P2', 'I', 'PresentarSolicitud', 'Cliente'),
('F3', 'P2', 'P3', 'P', 'PresentarDocumentosDatos', 'Cliente'),
('F3', 'P3', 'P4', 'P', 'RevisarDatos', 'Analista Bancario'),
('F3', 'P4', '-', 'C', 'Completos', 'Analista Bancario'),
('F3', 'P5', '-', 'F', 'NotificarDatosFaltantes', 'Cliente'),
('F3', 'P6', 'P7', 'P', 'EvaluarSolicitud', 'Analista Bancario'),
('F3', 'P7', '-', 'C', 'PSolicitudAprobada', 'Analista Bancario'),
('F3', 'P8', 'P9', 'P', 'RechazarPrestamo', 'Analista Bancario'),
('F3', 'P9', '-', 'F', 'NotificarRechazo', 'Cliente'),
('F3', 'P10', 'P11', 'P', 'AutorizarPrestamo', 'Analista Bancario'),
('F3', 'P11', '-', 'F', 'NotificarAprobacion', 'Cliente');





CREATE TABLE FlujoProcesoCondicionante(
    Flujo varchar(5),
    Proceso varchar(5),
    ProcesoNo varchar(5),
    ProcesoSi varchar(5)

);

-- PROCESO DE APERTURA EN CUENTA CORRIENTE

INSERT INTO FlujoProcesoCondicionante (Flujo, Proceso, ProcesoNo, ProcesoSi) 
VALUES ('F1', 'P6', 'P7', 'P8');

-- PROCESO DEPOSITO BANCARIO
INSERT INTO FlujoProcesoCondicionante (Flujo, Proceso, ProcesoNo, ProcesoSi) 
VALUES ('F2', 'P5', 'P6', 'P7');
INSERT INTO FlujoProcesoCondicionante (Flujo, Proceso, ProcesoNo, ProcesoSi) 
VALUES ('F2', 'P9', 'P10', 'P11');

-- PROCESO PRESTAMO BANCARIO
INSERT INTO FlujoProcesoCondicionante (Flujo, Proceso, ProcesoNo, ProcesoSi) 
VALUES ('F3', 'P4', 'P5', 'P6');
INSERT INTO FlujoProcesoCondicionante (Flujo, Proceso, ProcesoNo, ProcesoSi) 
VALUES ('F3', 'P7', 'P8', 'P10');




CREATE TABLE FlujoTramite
(
    Flujo varchar(5),	
    Proceso	varchar(5),
    Nro_tramite integer,	
    FechaInicio	datetime,
    FechaFin datetime, 
    Usuario	varchar(50)
);

INSERT INTO FlujoTramite (Flujo, Proceso, Nro_tramite, FechaInicio, FechaFin, Usuario) VALUES
('F1', 'P1', 1000, '2022-10-18 00:00:00', NULL, 'jrosah');





-- Para Academico

CREATE TABLE Cliente(
    usuario varchar(50),
    ci integer,
	nombreCompleto varchar(100),
    direccion varchar(50),
    correo varchar(100),
    telefono varchar(20),
    fecha_nacimiento datetime,
    primary key(usuario)
);

INSERT INTO Cliente VALUES('cliente1', 8441659, "Enrique Luis Barra Paredes", 'Av. Murillo 1523', 'cliente1@gmail.com', 1251362, '2001-03-05 00:00:00');
INSERT INTO Cliente VALUES('cliente3', 4561333, "Ana ALuisa Romero Linares", 'Nevada St 123', 'example@gmail.com', 69712345, '2000-10-18 00:00:00');
INSERT INTO Cliente VALUES('analistaB', 4561333, "Jorge Ariel Rosa Humiri", 'Los Robles Calle 123', 'example1@gmail.com', 6970124, '2000-10-18 00:00:00');



CREATE TABLE Usuario
(
	usuario varchar(50),
	password varchar(50),
    rol varchar(50)
);

-- PROCESO DE APERTURA EN CUENTA CORRIENTE

INSERT INTO Usuario VALUES ('cliente1', '123456', 'Cliente');
INSERT INTO Usuario VALUES ('plataforma', '123456', 'Plataforma');
INSERT INTO Usuario VALUES ('sistema', '123456', 'Sistema');

-- FLUJO DE DEPOSITO BANCARIO
INSERT INTO Usuario VALUES ('cliente2', '123456', 'Cliente');
INSERT INTO Usuario VALUES ('cajero', '123456', 'Cajero');
INSERT INTO Usuario VALUES ('sistema', '123456', 'Sistema');

-- PRESTAMO BANCARIO
INSERT INTO Usuario VALUES ('cliente3', '123456', 'Cliente');
INSERT INTO Usuario VALUES ('analistaB', '123456', 'Analista Bancario');

