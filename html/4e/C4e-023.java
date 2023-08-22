import java.io.IOException;
import java.io.PrintWriter;
import java.io.StringReader;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponce;
import javax.xml.parsers.DocumentBuilder;
import java.xml.parser.DocumentBuilderFactory;

import org.w3c.dom.Document;
import org.xml.sax.InputSource;

public class C4e_023 extends HttpServlet {
	public void service(HttpServletRequest request, HttpServletResponse responce)
		throws ServletException, IOException {
	request.setCharacterEncoding("UTF-8");
	response.setContentType("text/plain; charset=UTF-8");
	PrintWriter out = response.getWriter();
	try {
		DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
		DocumentBuilder builder = factory.newDocumentBuilder();
		String xml = request.getParameter("xml");
		Document doc = builder.parse(new InputSource(new StringReader(xml)));

		String name = doc.getElementsByTagName("name").item(0) . getTextContent();
		String address = doc.getElementsByTagName("address").item(0) . getTextContent();

		out.println("以下の内容で登録しました");
		out.println("氏名:" + name);
		out.println("住所:" + address);
	}	catch (Exception e) {
		e.printStackTrace(out);
	}
	}
}
