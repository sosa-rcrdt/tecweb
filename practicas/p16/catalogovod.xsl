<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/strict.dtd"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>Catálogo VOD - CinemaPulse</title>
                <!-- Bootstrap CDN -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
                <!-- FontAwesome CDN -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
                <style>
                    /* General Styles */
                    body {
                        background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
                        color: #ffffff;
                        font-family: 'Poppins', 'Roboto', Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }

                    h1 {
                        text-align: center;
                        font-size: 3.5rem;
                        font-weight: bold;
                        color: #ffffff;
                        margin: 50px 0;
                        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
                    }

                    h2 {
                        text-align: center;
                        color: #fdfdfd;
                        font-size: 2rem;
                        text-transform: uppercase;
                        margin: 30px 0;
                        font-family: 'Helvetica Neue', sans-serif;
                        letter-spacing: 1px;
                    }

                    .container {
                        padding: 50px;
                        max-width: 1200px;
                        margin: auto;
                    }

                    /* Table Styles */
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 30px;
                        background-color: rgba(0, 0, 0, 0.7);
                        border-radius: 10px;
                        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
                    }

                    table thead {
                        background-color: #ff5722; /* Naranja brillante para encabezado */
                        color: #ffffff;
                    }

                    table th, table td {
                        padding: 12px 15px;
                        text-align: center;
                    }

                    table tbody tr:nth-child(even) {
                        background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro para filas pares */
                    }

                    table tbody tr:nth-child(odd) {
                        background-color: rgba(0, 0, 0, 0.6); /* Fondo oscuro para filas impares */
                    }

                    table tbody tr:hover {
                        background-color: rgba(255, 87, 34, 0.2); /* Color vibrante para hover */
                        transform: scale(1.02);
                        transition: 0.3s ease-in-out;
                    }

                    /* Buttons */
                    .btn {
                        color: #ffffff;
                        background: #ff5722;
                        border: none;
                        border-radius: 30px;
                        padding: 10px 20px;
                        text-transform: uppercase;
                        font-size: 1rem;
                        transition: 0.3s;
                    }

                    .btn:hover {
                        background: #e64a19;
                        transform: translateY(-3px);
                    }

                    /* Logo Styles */
                    .logo {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        height: 200px;
                        width: 320px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <img src="logo.png" alt="CinemaPulse Logo" class="logo"/>
                    <h2><i class="fas fa-video"></i> Películas</h2>
                    <xsl:for-each select="CatalogoVOD/contenido/peliculas">
                        <table class="table table-dark table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Duración</th>
                                    <th>Género</th>
                                </tr>
                            </thead>
                            <tbody>
                                <xsl:for-each select="genero">
                                    <xsl:variable name="generoNombre" select="@nombre"/>
                                    <xsl:for-each select="titulo">
                                        <tr>
                                            <td><xsl:value-of select="@nombre"/></td>
                                            <td><xsl:value-of select="@duracion"/> min</td>
                                            <td><xsl:value-of select="$generoNombre"/></td>
                                        </tr>
                                    </xsl:for-each>
                                </xsl:for-each>
                            </tbody>
                        </table>
                    </xsl:for-each>

                    <h2><i class="fas fa-tv"></i> Series</h2>
                    <xsl:for-each select="CatalogoVOD/contenido/series">
                        <table class="table table-dark table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Duración</th>
                                    <th>Género</th>
                                </tr>
                            </thead>
                            <tbody>
                                <xsl:for-each select="genero">
                                    <xsl:variable name="generoNombre" select="@nombre"/>
                                    <xsl:for-each select="titulo">
                                        <tr>
                                            <td><xsl:value-of select="@nombre"/></td>
                                            <td><xsl:value-of select="@duracion"/> min</td>
                                            <td><xsl:value-of select="$generoNombre"/></td>
                                        </tr>
                                    </xsl:for-each>
                                </xsl:for-each>
                            </tbody>
                        </table>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
